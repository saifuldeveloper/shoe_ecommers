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
        Schema::create('users', function (Blueprint $table) {
             $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->string('email_token')->nullable();
            $table->string('password');

            // Shipping fields
            $table->string('ship_address1')->nullable();
            $table->string('ship_address2')->nullable();
            $table->string('ship_zip')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_country')->nullable();
            $table->string('ship_company')->nullable();

            // Billing fields
            $table->string('bill_address1')->nullable();
            $table->string('bill_address2')->nullable();
            $table->string('bill_zip')->nullable();
            $table->string('bill_city')->nullable();
            $table->string('bill_country')->nullable();
            $table->string('bill_company')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
