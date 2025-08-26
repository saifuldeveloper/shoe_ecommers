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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('fcategories')->onDelete('cascade');
            $table->string('title');
            $table->text('details');
            $table->text('meta_keywords')->nullable();
            $table->text('meta_descriptions')->nullable();
            $table->timestamps();
            
            // Indexes for better performance
            $table->index('category_id');
            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
