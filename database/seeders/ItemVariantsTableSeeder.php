<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemVariantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_variants')->delete();
        
        \DB::table('item_variants')->insert(array (
            0 => 
            array (
                'id' => 17,
                'item_id' => 1,
                'variant_sku' => 'SKU1001-RED-M',
                'variant_id' => 1,
                'position' => 1,
                'item_code' => 'AJR1-RED-M',
                'additional_cost' => 5.0,
                'additional_price' => 10.0,
                'qty' => 5.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            1 => 
            array (
                'id' => 18,
                'item_id' => 1,
                'variant_sku' => 'SKU1001-BLUE-L',
                'variant_id' => 1,
                'position' => 2,
                'item_code' => 'AJR1-BLUE-L',
                'additional_cost' => 6.0,
                'additional_price' => 12.0,
                'qty' => 3.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            2 => 
            array (
                'id' => 19,
                'item_id' => 2,
                'variant_sku' => 'SKU1002-RED-M',
                'variant_id' => 1,
                'position' => 1,
                'item_code' => 'AJR2-RED-M',
                'additional_cost' => 5.0,
                'additional_price' => 10.0,
                'qty' => 7.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            3 => 
            array (
                'id' => 20,
                'item_id' => 3,
                'variant_sku' => 'SKU1003-BLACK-XL',
                'variant_id' => 1,
                'position' => 1,
                'item_code' => 'AJR3-BLACK-XL',
                'additional_cost' => 8.0,
                'additional_price' => 15.0,
                'qty' => 4.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            4 => 
            array (
                'id' => 21,
                'item_id' => 4,
                'variant_sku' => 'SKU1004-GREEN-S',
                'variant_id' => 16,
                'position' => 1,
                'item_code' => 'AJR4-GREEN-S',
                'additional_cost' => 7.0,
                'additional_price' => 14.0,
                'qty' => 10.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            5 => 
            array (
                'id' => 22,
                'item_id' => 5,
                'variant_sku' => 'SKU1005-YELLOW-M',
                'variant_id' => 17,
                'position' => 1,
                'item_code' => 'AJR5-YELLOW-M',
                'additional_cost' => 9.0,
                'additional_price' => 18.0,
                'qty' => 6.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            6 => 
            array (
                'id' => 23,
                'item_id' => 6,
                'variant_sku' => 'SKU1006-PURPLE-L',
                'variant_id' => 18,
                'position' => 1,
                'item_code' => 'AJR6-PURPLE-L',
                'additional_cost' => 5.0,
                'additional_price' => 11.0,
                'qty' => 8.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            7 => 
            array (
                'id' => 24,
                'item_id' => 7,
                'variant_sku' => 'SKU1007-PINK-XL',
                'variant_id' => 19,
                'position' => 1,
                'item_code' => 'AJR7-PINK-XL',
                'additional_cost' => 8.0,
                'additional_price' => 16.0,
                'qty' => 3.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            8 => 
            array (
                'id' => 25,
                'item_id' => 8,
                'variant_sku' => 'SKU1008-GRAY-XXL',
                'variant_id' => 20,
                'position' => 1,
                'item_code' => 'AJR8-GRAY-XXL',
                'additional_cost' => 10.0,
                'additional_price' => 20.0,
                'qty' => 5.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            9 => 
            array (
                'id' => 26,
                'item_id' => 9,
                'variant_sku' => 'SKU1009-ORANGE-S',
                'variant_id' => 21,
                'position' => 1,
                'item_code' => 'AJR9-ORANGE-S',
                'additional_cost' => 6.0,
                'additional_price' => 13.0,
                'qty' => 7.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            10 => 
            array (
                'id' => 27,
                'item_id' => 10,
                'variant_sku' => 'SKU1010-WHITE-M',
                'variant_id' => 22,
                'position' => 1,
                'item_code' => 'AJR10-WHITE-M',
                'additional_cost' => 7.0,
                'additional_price' => 14.0,
                'qty' => 9.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            11 => 
            array (
                'id' => 28,
                'item_id' => 11,
                'variant_sku' => 'SKU1011-BROWN-L',
                'variant_id' => 23,
                'position' => 1,
                'item_code' => 'AJR11-BROWN-L',
                'additional_cost' => 9.0,
                'additional_price' => 17.0,
                'qty' => 4.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            12 => 
            array (
                'id' => 29,
                'item_id' => 12,
                'variant_sku' => 'SKU1012-CYAN-XL',
                'variant_id' => 24,
                'position' => 1,
                'item_code' => 'AJR12-CYAN-XL',
                'additional_cost' => 8.0,
                'additional_price' => 16.0,
                'qty' => 6.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            13 => 
            array (
                'id' => 30,
                'item_id' => 13,
                'variant_sku' => 'SKU1013-MAGENTA-XXL',
                'variant_id' => 25,
                'position' => 1,
                'item_code' => 'AJR13-MAGENTA-XXL',
                'additional_cost' => 11.0,
                'additional_price' => 22.0,
                'qty' => 2.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            14 => 
            array (
                'id' => 31,
                'item_id' => 14,
                'variant_sku' => 'SKU1014-LIME-S',
                'variant_id' => 26,
                'position' => 1,
                'item_code' => 'AJR14-LIME-S',
                'additional_cost' => 6.0,
                'additional_price' => 12.0,
                'qty' => 8.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            15 => 
            array (
                'id' => 32,
                'item_id' => 15,
                'variant_sku' => 'SKU1015-TEAL-M',
                'variant_id' => 27,
                'position' => 1,
                'item_code' => 'AJR15-TEAL-M',
                'additional_cost' => 7.0,
                'additional_price' => 14.0,
                'qty' => 5.0,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
        ));
        
        
    }
}