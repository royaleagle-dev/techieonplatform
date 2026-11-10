<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ExchangeRateService
{
    /**
     * Get the current USD -> NGN rate.
     *
     * Fetches a live rate and caches it for a few hours; falls back to the
     * configured rate if the request fails for any reason.
     */
    public function usdToNgn(): float
    {
        $hours = (int) config('services.sponsorship.rate_cache_hours', 6);

        return (float) Cache::remember('usd_to_ngn_rate', now()->addHours($hours), function () {
            $fallback = (float) config('services.sponsorship.usd_to_ngn_fallback', 1600);

            try {
                $response = Http::timeout(5)
                    ->acceptJson()
                    ->get('https://open.er-api.com/v6/latest/USD');

                $rate = $response->json('rates.NGN');

                if ($response->successful() && $rate) {
                    return (float) $rate;
                }
            } catch (\Throwable $e) {
                // Fall through to the configured fallback rate.
            }

            return $fallback;
        });
    }
}
