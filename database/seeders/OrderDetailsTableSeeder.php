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
                'item_id' => 34,
                'item_name' => NULL,
                'item_code' => NULL,
                'item_image' => NULL,
                'qty' => 1.0,
                'price' => 795.0,
                'variant_price' => 0.0,
                'total_price' => 795.0,
                'item_variant_id' => 92,
                'item_variant_sku' => NULL,
                'details' => NULL,
                'status' => 'pending',
                'send_retailer' => 0,
                'created_at' => '2026-02-05 16:11:59',
                'updated_at' => '2026-02-05 16:11:59',
            ),
        ));
        
        
    }
}