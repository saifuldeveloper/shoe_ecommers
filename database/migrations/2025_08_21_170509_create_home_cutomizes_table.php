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
        Schema::create('home_cutomizes', function (Blueprint $table) {
            $table->id();
            $table->text('banner_first')->nullable();
            $table->text('banner_secend')->nullable();
            $table->text('banner_third')->nullable();
            $table->text('popular_category')->nullable();
            $table->text('two_column_category')->nullable();
            $table->text('feature_category')->nullable();
            $table->text('home_page4')->nullable();
            $table->text('home_4_popular_category')->nullable();
            $table->text('hero_banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_cutomizes');
    }
};
