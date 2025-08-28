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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('language', 50);
            $table->string('type', 50);
            $table->string('file');
            $table->string('name');
            $table->boolean('is_default')->default(false);
            $table->boolean('rtl')->default(false);
            $table->timestamps();
            
            // Indexes for better performance
            $table->index('language');
            $table->index('is_default');
            $table->index('rtl');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
