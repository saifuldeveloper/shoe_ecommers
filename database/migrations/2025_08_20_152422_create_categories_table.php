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
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->tinyInteger('is_in_menu')->default(0)->index();
            $table->unsignedInteger('menu_serial')->default(0);
            $table->tinyInteger('is_featured')->default(0)->index();
            $table->unsignedInteger('featured_serial')->default(0);
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
