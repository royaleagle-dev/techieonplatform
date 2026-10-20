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
        Schema::create('solution_requests', function (Blueprint $table) {
            $table->id();
            $table->boolean('agreed')->default(false);
            $table->string('audience');
            $table->string('budget');
            $table->string('company');
            $table->text('custom_req')->nullable();
            $table->text('description');
            $table->string('email');
            $table->json('features'); // Store array of features as JSON
            $table->string('help');
            $table->string('industry');
            $table->string('method');
            $table->string('name');
            $table->text('notes')->nullable();
            $table->string('objective');
            $table->string('phone');
            $table->string('project');
            $table->string('status');
            $table->string('timeline');
            $table->string('type');
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solution_requests');
    }
};
