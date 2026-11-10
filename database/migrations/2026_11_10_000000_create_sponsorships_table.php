<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sponsorships', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('message')->nullable();

            // What the sponsor selected
            $table->string('unit');                          // day | week | month
            $table->unsignedInteger('quantity');             // number of units selected
            $table->unsignedInteger('days');                 // total sponsored days

            // Money (stored in Naira, with the USD amount + rate used)
            $table->string('currency')->default('NGN');
            $table->decimal('usd_amount', 12, 2);            // amount in USD
            $table->decimal('exchange_rate', 14, 4);         // NGN per USD at payment time
            $table->decimal('amount', 14, 2);                // amount charged, in NGN

            // Payment state
            $table->string('status')->default('pending');    // pending | paid | failed
            $table->string('paystack_reference')->nullable();
            $table->json('paystack_data')->nullable();
            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorships');
    }
};
