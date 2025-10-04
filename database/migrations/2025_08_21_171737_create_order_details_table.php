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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('item_id');
            $table->string('item_name')->nullable();
            $table->string('item_code')->nullable();
            $table->string('item_image')->nullable();
            $table->double('qty');
            $table->double('price');
            $table->double('variant_price')->default(0);
            $table->double('total_price');
            $table->integer('item_variant_id')->nullable();
            $table->string('details')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
