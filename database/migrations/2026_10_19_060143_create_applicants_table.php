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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('learning_mode');
            $table->string('phone');
            $table->string('scholarship_code')->nullable();
            $table->string('status');
            //Newly added fields
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('educational_level')->nullable();
            $table->date('preferred_start_date')->nullable();
            $table->string('payment_ref')->nullable();
            $table->string('payment_status')->nullable();
            // $table->string('program')->nullable();
            // $table->string('tech_experience')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
