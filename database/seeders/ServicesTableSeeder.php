<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 31,
                'title' => 'Secure Online Payment',
                'details' => 'We posess SSL / Secure Certificate',
                'photo' => '162196474904.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 32,
                'title' => '24/7 Customer Support',
                'details' => 'Friendly 24/7 customer support',
                'photo' => '162196471103.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 33,
                'title' => 'Money Back Guarantee',
                'details' => 'We return money within 30 days',
                'photo' => '162196467602.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 34,
                'title' => 'Free Worldwide Shipping',
                'details' => 'Free shipping for all orders over $100 Contrary to popular belie',
                'photo' => '162196463701.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}