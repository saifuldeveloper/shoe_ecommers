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
                'price' => '0.00',
                'minimum_price' => '0.00',
                'is_condition' => 0,
                'status' => 'inactive',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Inside Dhaka',
                'price' => '60.00',
                'minimum_price' => '0.00',
                'is_condition' => 0,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Outsite Dhaka',
                'price' => '120.00',
                'minimum_price' => '0.00',
                'is_condition' => 0,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}