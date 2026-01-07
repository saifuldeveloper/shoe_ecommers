<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_details')->delete();
        
        \DB::table('order_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'item_id' => 13,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 1212.0,
                'variant_price' => 0.0,
                'total_price' => 1212.0,
                'item_variant_id' => NULL,
                'details' => NULL,
                'status' => 'Delivered',
                'created_at' => '2025-11-29 12:57:34',
                'updated_at' => '2025-11-29 13:03:21',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 3,
                'item_id' => 10,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 140.0,
                'variant_price' => 0.0,
                'total_price' => 140.0,
                'item_variant_id' => NULL,
                'details' => NULL,
                'status' => 'pending',
                'created_at' => '2025-12-09 16:31:46',
                'updated_at' => '2025-12-09 16:31:46',
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 4,
                'item_id' => 2,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 130.0,
                'variant_price' => 0.0,
                'total_price' => 130.0,
                'item_variant_id' => NULL,
                'details' => NULL,
                'status' => 'pending',
                'created_at' => '2025-12-11 21:37:26',
                'updated_at' => '2025-12-11 21:37:26',
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 5,
                'item_id' => 17,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 500.0,
                'variant_price' => 0.0,
                'total_price' => 500.0,
                'item_variant_id' => NULL,
                'details' => NULL,
                'status' => 'pending',
                'created_at' => '2026-01-07 05:15:35',
                'updated_at' => '2026-01-07 05:15:35',
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => 5,
                'item_id' => 18,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 600.0,
                'variant_price' => 0.0,
                'total_price' => 600.0,
                'item_variant_id' => NULL,
                'details' => NULL,
                'status' => 'pending',
                'created_at' => '2026-01-07 05:15:35',
                'updated_at' => '2026-01-07 05:15:35',
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => 6,
                'item_id' => 3,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 140.0,
                'variant_price' => 0.0,
                'total_price' => 140.0,
                'item_variant_id' => NULL,
                'details' => NULL,
                'status' => 'pending',
                'created_at' => '2026-01-07 08:09:14',
                'updated_at' => '2026-01-07 08:09:14',
            ),
        ));
        
        
    }
}