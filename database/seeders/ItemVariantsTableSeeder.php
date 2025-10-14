<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemVariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
            
            [
                'item_id' => 4,
                'variant_sku' => 'SKU1004-GREEN-S',
                'variant_id' => 16, 
                'position' => 1,
                'item_code' => 'AJR4-GREEN-S',
                'additional_cost' => 7,
                'additional_price' => 14,
                'qty' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
      
            [
                'item_id' => 5,
                'variant_sku' => 'SKU1005-YELLOW-M',
                'variant_id' => 17, 
                'position' => 1,
                'item_code' => 'AJR5-YELLOW-M',
                'additional_cost' => 9,
                'additional_price' => 18,
                'qty' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            [
                'item_id' => 6,
                'variant_sku' => 'SKU1006-PURPLE-L',
                'variant_id' => 18, 
                'position' => 1,
                'item_code' => 'AJR6-PURPLE-L',
                'additional_cost' => 5,
                'additional_price' => 11,
                'qty' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'item_id' => 7,
                'variant_sku' => 'SKU1007-PINK-XL',
                'variant_id' => 19, 
                'position' => 1,
                'item_code' => 'AJR7-PINK-XL',
                'additional_cost' => 8,
                'additional_price' => 16,
                'qty' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
       
            [
                'item_id' => 8,
                'variant_sku' => 'SKU1008-GRAY-XXL',
                'variant_id' => 20, 
                'position' => 1,
                'item_code' => 'AJR8-GRAY-XXL',
                'additional_cost' => 10,
                'additional_price' => 20,
                'qty' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
     
            [
                'item_id' => 9,
                'variant_sku' => 'SKU1009-ORANGE-S',
                'variant_id' => 21,
                'position' => 1,
                'item_code' => 'AJR9-ORANGE-S',
                'additional_cost' => 6,
                'additional_price' => 13,
                'qty' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            [
                'item_id' => 10,
                'variant_sku' => 'SKU1010-WHITE-M',
                'variant_id' => 22, 
                'position' => 1,
                'item_code' => 'AJR10-WHITE-M',
                'additional_cost' => 7,
                'additional_price' => 14,
                'qty' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
            [
                'item_id' => 11, 
                'variant_sku' => 'SKU1011-BROWN-L',
                'variant_id' => 23, 
                'position' => 1,
                'item_code' => 'AJR11-BROWN-L',
                'additional_cost' => 9,
                'additional_price' => 17,
                'qty' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
            [
                'item_id' => 12, 
                'variant_sku' => 'SKU1012-CYAN-XL',
                'variant_id' => 24, 
                'position' => 1,
                'item_code' => 'AJR12-CYAN-XL',
                'additional_cost' => 8,
                'additional_price' => 16,
                'qty' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
            [
                'item_id' => 13, 
                'variant_sku' => 'SKU1013-MAGENTA-XXL',
                'variant_id' => 25, 
                'position' => 1,
                'item_code' => 'AJR13-MAGENTA-XXL',
                'additional_cost' => 11,
                'additional_price' => 22,
                'qty' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
            [
                'item_id' => 14, 
                'variant_sku' => 'SKU1014-LIME-S',
                'variant_id' => 26, // New variant_id
                'position' => 1,
                'item_code' => 'AJR14-LIME-S',
                'additional_cost' => 6,
                'additional_price' => 12,
                'qty' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'item_id' => 15, 
                'variant_sku' => 'SKU1015-TEAL-M',
                'variant_id' => 27, 
                'position' => 1,
                'item_code' => 'AJR15-TEAL-M',
                'additional_cost' => 7,
                'additional_price' => 14,
                'qty' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // -------------------------------------------------------------
        ];

        DB::table('item_variants')->insert($variants);
    }
}