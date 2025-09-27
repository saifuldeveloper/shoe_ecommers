<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemVariantsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('item_variants')->delete();

        $variants = [
            [
                'item_id' => 1,
                'variant_sku' => 'SKU1001-RED-M',
                'variant_id' => 1, 
                'position' => 1,
                'item_code' => 'AJR1-RED-M',
                'additional_cost' => 5,
                'additional_price' => 10,
                'qty' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 1,
                'variant_sku' => 'SKU1001-BLUE-L',
                'variant_id' => 1,
                'position' => 2,
                'item_code' => 'AJR1-BLUE-L',
                'additional_cost' => 6,
                'additional_price' => 12,
                'qty' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 2,
                'variant_sku' => 'SKU1002-RED-M',
                'variant_id' => 1,
                'position' => 1,
                'item_code' => 'AJR2-RED-M',
                'additional_cost' => 5,
                'additional_price' => 10,
                'qty' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 3,
                'variant_sku' => 'SKU1003-BLACK-XL',
                'variant_id' => 1,
                'position' => 1,
                'item_code' => 'AJR3-BLACK-XL',
                'additional_cost' => 8,
                'additional_price' => 15,
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('item_variants')->insert($variants);
    }
}
