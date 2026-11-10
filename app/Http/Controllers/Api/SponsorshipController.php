<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sponsorship;
use App\Services\ExchangeRateService;
use App\Services\PaystackService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SponsorshipController extends Controller
{
    /**
     * Number of days represented by each sponsorship unit.
     */
    protected array $unitDays = [
        'day' => 1,
        'week' => 7,
        'month' => 30,
    ];

    /**
     * Current pricing info for the sponsor page (rate + daily price).
     */
    public function rate(ExchangeRateService $rates)
    {
        return response()->json([
            'success' => true,
            'data' => [
                'currency' => 'NGN',
                'daily_rate_usd' => (float) config('services.sponsorship.daily_rate_usd', 1),
                'usd_to_ngn' => $rates->usdToNgn(),
                'unit_days' => $this->unitDays,
            ],
        ]);
    }

    /**
     * Create a pending sponsorship and start a Paystack transaction.
     */
    public function initialize(Request $request, ExchangeRateService $rates, PaystackService $paystack)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:1000',
            'unit' => 'required|in:day,week,month',
            'quantity' => 'required|integer|min:1|max:3650',
        ]);

        $days = $this->unitDays[$validated['unit']] * $validated['quantity'];
        $dailyRate = (float) config('services.sponsorship.daily_rate_usd', 1);
        $usdAmount = round($days * $dailyRate, 2);

        $exchangeRate = $rates->usdToNgn();
        $amountNgn = round($usdAmount * $exchangeRate, 2);

        if ($amountNgn < 100) {
            return response()->json([
                'success' => false,
                'message' => 'The minimum sponsorship amount is NGN 100.',
            ], 422);
        }

        $reference = 'SPN-' . strtoupper(Str::random(16));

        $sponsorship = Sponsorship::create([
            'reference' => $reference,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'message' => $validated['message'] ?? null,
            'unit' => $validated['unit'],
            'quantity' => $validated['quantity'],
            'days' => $days,
            'currency' => 'NGN',
            'usd_amount' => $usdAmount,
            'exchange_rate' => $exchangeRate,
            'amount' => $amountNgn,
            'status' => 'pending',
        ]);

        try {
            $init = $paystack->initialize([
                'email' => $validated['email'],
                'amount' => (int) round($amountNgn * 100), // Paystack expects the lowest unit (kobo)
                'currency' => 'NGN',
                'reference' => $reference,
                'metadata' => [
                    'custom_fields' => [
                        [
                            'display_name' => 'Sponsor',
                            'variable_name' => 'sponsor_name',
                            'value' => $validated['name'],
                        ],
                        [
                            'display_name' => 'Days sponsored',
                            'variable_name' => 'days',
                            'value' => (string) $days,
                        ],
                    ],
                ],
            ]);
        } catch (\Throwable $e) {
            $sponsorship->update(['status' => 'failed']);

            return response()->json([
                'success' => false,
                'message' => 'We could not reach the payment service. Please try again.',
            ], 502);
        }

        if (!($init['status'] ?? false) || empty($init['data']['access_code'])) {
            $sponsorship->update(['status' => 'failed', 'paystack_data' => $init]);

            return response()->json([
                'success' => false,
                'message' => $init['message'] ?? 'Unable to start the payment. Please try again.',
            ], 422);
        }

        return response()->json([
            'success' => true,
            'message' => 'Payment initialized.',
            'data' => [
                'access_code' => $init['data']['access_code'],
                'reference' => $reference,
                'currency' => 'NGN',
                'amount' => $amountNgn,
                'usd_amount' => $usdAmount,
                'exchange_rate' => $exchangeRate,
                'days' => $days,
            ],
        ]);
    }

    /**
     * Verify a sponsorship payment with Paystack and mark it as paid.
     */
    public function verify(Request $request, PaystackService $paystack)
    {
        $validated = $request->validate([
            'reference' => 'required|string',
        ]);

        $sponsorship = Sponsorship::where('reference', $validated['reference'])->first();

        if (!$sponsorship) {
            return response()->json([
                'success' => false,
                'message' => 'Sponsorship record not found.',
            ], 404);
        }

        if ($sponsorship->status === 'paid') {
            return response()->json([
                'success' => true,
                'message' => 'This sponsorship has already been confirmed.',
                'data' => $sponsorship,
            ]);
        }

        try {
            $result = $paystack->verify($validated['reference']);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'We could not reach the payment service. Please try again.',
            ], 502);
        }

        $data = $result['data'] ?? null;

        $expectedKobo = (int) round($sponsorship->amount * 100);

        if (($result['status'] ?? false) && $data && ($data['status'] ?? null) === 'success' && (int) $data['amount'] >= $expectedKobo) {
            $sponsorship->update([
                'status' => 'paid',
                'paid_at' => now(),
                'paystack_reference' => $data['reference'] ?? $validated['reference'],
                'paystack_data' => $data,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for sponsoring a tech talent!',
                'data' => $sponsorship,
            ]);
        }

        $sponsorship->update([
            'status' => 'failed',
            'paystack_data' => $data,
        ]);

        return response()->json([
            'success' => false,
            'message' => 'We could not confirm this payment. Please try again.',
            'data' => $sponsorship,
        ], 422);
    }
}
