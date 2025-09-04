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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');                      
            $table->string('slug')->unique();          
            $table->unsignedBigInteger('parent_id')->nullable(); // For subcategories
            $table->text('description')->nullable(); 
            $table->text('meta_keywords')->nullable();  
            $table->text('meta_descriptions')->nullable();  
            $table->tinyInteger('is_feature')->default(0);
            $table->integer('serial')->default(0);
            $table->string('photo')->nullable();         
            $table->boolean('status')->default(1);      
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
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
