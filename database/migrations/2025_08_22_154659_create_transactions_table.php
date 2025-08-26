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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('txn_id')->unique();
            $table->decimal('amount', 10, 2);
            $table->string('user_email');
            $table->string('currency_sign', 10);
            $table->decimal('currency_value', 10, 4)->default(1.0000);
            $table->timestamps();
            
            // Indexes for better performance
            $table->index('order_id');
            $table->index('txn_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
