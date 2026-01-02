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
        Schema::create('reward_point_systems', function (Blueprint $table) {
            $table->id();
            $table->decimal('sold_amount_per_point', 10, 2)->default(0);
            $table->decimal('min_sold_amount_to_get_point', 10, 2)->default(0);
            $table->decimal('redeem_amount_per_unit_point', 10, 2)->default(0);
            $table->decimal('min_order_total_to_redeem_points', 10, 2)->default(0);
            $table->decimal('max_redeem_point_per_order', 10, 2)->default(0);
            $table->decimal('min_redeem_point', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reward_point_systems');
    }
};
