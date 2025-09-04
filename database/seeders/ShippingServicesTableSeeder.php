<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_services')->delete();
        
        \DB::table('shipping_services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Free Delevery',
                'price' => 0.0,
                'minimum_price' => 1000.0,
                'is_condition' => 1,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Delivery',
                'price' => 20.0,
                'minimum_price' => 0.0,
                'is_condition' => 0,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}