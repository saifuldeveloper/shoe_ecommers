<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromoCodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('promo_codes')->delete();
        
        \DB::table('promo_codes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Flash Discount',
                'code_name' => 'ironman',
                'no_of_times' => 95,
                'discount' => '2.00',
                'status' => 'active',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Halloween Carnival',
                'code_name' => 'superman',
                'no_of_times' => 96,
                'discount' => '5.00',
                'status' => 'active',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Fest Carnival',
                'code_name' => 'loki',
                'no_of_times' => 94,
                'discount' => '10.00',
                'status' => 'active',
                'type' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}