<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id')->nullable();
            $table->string('session_id')->nullable();
            $table->text('cart'); // JSON data of cart items
            $table->string('currency_sign', 10);
            $table->decimal('currency_value', 10, 4)->default(1.0000);
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('shipping', 10, 2)->default(0);
            $table->string('payment_method', 50);
            $table->string('txnid')->nullable();
            $table->decimal('tax', 10, 2)->default(0);
            $table->string('charge_id')->nullable();
            $table->string('transaction_number')->nullable();
            $table->string('order_status')->default('pending');
            $table->text('shipping_info'); // JSON data
            $table->text('billing_info'); // JSON data
            $table->string('payment_status')->default('pending');
            $table->decimal('state_price', 10, 2)->default(0);
            $table->string('state')->nullable();
            $table->timestamps();
            // Indexes for better performance
            $table->index('id');
            $table->index('transaction_number');
            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
