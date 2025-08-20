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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');                      // Category name
            $table->string('slug')->unique();            // SEO-friendly URL
            $table->unsignedBigInteger('parent_id')->nullable(); // For subcategories
            $table->text('description')->nullable();     // Optional description
            $table->string('photo')->nullable();         // Category image
            $table->boolean('status')->default(1);       // Active/Inactive
            $table->timestamps();

            // Foreign key for subcategories (self relationship)
            $table->foreign('parent_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
