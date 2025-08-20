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
        Schema::create('items', function (Blueprint $table) {
             $table->id();
            
            // Foreign keys
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('subcategory_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('childcategory_id')->nullable();
            $table->foreignId('tax_id')->nullable();
            $table->foreignId('brand_id')->nullable()->constrained()->onDelete('set null');
            
            // Basic information
            $table->text('name');
            $table->text('slug');
            $table->string('sku')->unique();
            $table->text('tags')->nullable();
            
            // Media
            $table->string('photo')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('video')->nullable();
            $table->string('file')->nullable();
            $table->enum('file_type', ['file', 'link'])->nullable();
            $table->text('link')->nullable();
            
            // Descriptions
            $table->text('sort_details');
            $table->text('details')->nullable();
            
            // Specifications
            $table->text('specification_name')->nullable();
            $table->text('specification_description')->nullable();
            $table->boolean('is_specification')->default(false);
            
            // Pricing and inventory
            $table->double('discount_price')->nullable();
            $table->double('previous_price')->nullable();
            $table->integer('stock')->default(0);
            
            // Digital product fields
            $table->text('license_name')->nullable();
            $table->text('license_key')->nullable();
            $table->string('item_type')->default('physical'); // physical, digital, etc.
            
            // Affiliate
            $table->text('affiliate_link')->nullable();
            
            // SEO
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            
            // Status and dates
            $table->boolean('status')->default(true);
            $table->string('date')->nullable();
            $table->string('is_type')->nullable(); // feature, new, etc.
            
            $table->timestamps();
            
            // Indexes for better performance
            $table->index('category_id');
            $table->index('subcategory_id');
            $table->index('childcategory_id');
            $table->index('brand_id');
            $table->index('tax_id');
            $table->index('sku');
            $table->index('status');
            $table->index('item_type');
            $table->index('is_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
