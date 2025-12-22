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
        Schema::create('shipping_services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('minimum_price', 10, 2)->default(0);
            $table->boolean('is_condition')->default(false);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();


            $table->softDeletes();
            $table->unsignedBigInteger('deleted_by')->nullable();


            // Indexes for better performance
            $table->index('status');
            $table->index('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_services');
    }
};
