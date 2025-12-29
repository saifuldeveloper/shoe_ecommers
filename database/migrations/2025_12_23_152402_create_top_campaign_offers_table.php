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
        Schema::create('top_campaign_offers', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_title')->nullable();
             $table->string('campaign_slug')->unique();
            $table->dateTime('campaign_end_date')->nullable();
            $table->boolean('campaign_status')->default(false);
            $table->boolean('campaig_product_charge')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_campaign_offers');
    }
};
