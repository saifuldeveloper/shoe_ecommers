<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
    $items = [
            [
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => null,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Air Jordan Retro 1',
                'slug' => 'air-jordan-retro-1',
                'sku' => 'SKU1001',
                'photo' => 'product1.webp',
                'thumbnail' => 'product1.webp',
                'discount_price' => 120,
                'previous_price' => 150,
                'stock' => 10,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => null,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Air Jordan Retro 2',
                'slug' => 'air-jordan-retro-2',
                'sku' => 'SKU1002',
                'photo' => 'product2.webp',
                'thumbnail' => 'product2.webp',
                'discount_price' => 130,
                'previous_price' => 160,
                'stock' => 15,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => null,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Air Jordan Retro 3',
                'slug' => 'air-jordan-retro-3',
                'sku' => 'SKU1003',
                'photo' => 'product3.webp',
                'thumbnail' => 'product3.webp',
                'discount_price' => 140,
                'previous_price' => 170,
                'stock' => 8,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
            Item::insert($items);
    }
}