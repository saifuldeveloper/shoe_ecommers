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
        Schema::create('promo_codes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code_name')->unique();
            $table->integer('no_of_times')->default(1);
            $table->decimal('discount', 10, 2);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('type', ['percentage', 'fixed'])->default('percentage');
            $table->timestamps();
            
            // Indexes for better performance
            $table->index('code_name');
            $table->index('status');
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_codes');
    }
};
