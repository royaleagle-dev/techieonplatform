<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PaystackService
{
    protected string $secretKey;

    protected string $baseUrl;

    public function __construct()
    {
        $this->secretKey = (string) config('services.paystack.secret_key');
        $this->baseUrl = rtrim((string) config('services.paystack.base_url', 'https://api.paystack.co'), '/');
    }

    /**
     * Start a transaction. Returns Paystack's raw JSON response.
     */
    public function initialize(array $payload): array
    {
        $response = $this->client()->post($this->baseUrl . '/transaction/initialize', $payload);

        return $response->json() ?? [];
    }

    /**
     * Verify a transaction by reference. Returns Paystack's raw JSON response.
     */
    public function verify(string $reference): array
    {
        $response = $this->client()->get($this->baseUrl . '/transaction/verify/' . rawurlencode($reference));

        return $response->json() ?? [];
    }

    protected function client(): \Illuminate\Http\Client\PendingRequest
    {
        return Http::withToken($this->secretKey)
            ->acceptJson()
            ->timeout(20)
            ->connectTimeout(10);
    }
}
