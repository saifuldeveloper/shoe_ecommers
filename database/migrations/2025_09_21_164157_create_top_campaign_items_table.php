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
        Schema::create('top_campaign_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campaign_id');
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->boolean('is_feature')->default(false);
            $table->timestamps();
            
            // Unique constraint to prevent duplicate items in the same campaign
            $table->unique(['campaign_id', 'item_id']);
            
            // Indexes for better performance
            $table->index('campaign_id');
            $table->index('item_id');
            $table->index('status');
            $table->index('is_feature');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_items');
    }
};
