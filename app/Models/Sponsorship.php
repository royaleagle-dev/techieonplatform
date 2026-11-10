<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    protected $fillable = [
        'reference',
        'name',
        'email',
        'phone',
        'message',
        'unit',
        'quantity',
        'days',
        'currency',
        'usd_amount',
        'exchange_rate',
        'amount',
        'status',
        'paystack_reference',
        'paystack_data',
        'paid_at',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'days' => 'integer',
        'usd_amount' => 'decimal:2',
        'exchange_rate' => 'decimal:4',
        'amount' => 'decimal:2',
        'paystack_data' => 'array',
        'paid_at' => 'datetime',
    ];
}
