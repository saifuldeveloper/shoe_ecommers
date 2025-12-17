<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_settings')->delete();
        
        \DB::table('payment_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cash On Delivery',
                'information' => NULL,
                'unique_keyword' => 'cod',
                'photo' => '1631032407index.png',
                'text' => 'Cash on Delivery basically means you will pay the amount of product while you get the item delivered to you.',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SSLCOMMERZ',
                'information' => NULL,
                'unique_keyword' => 'sslcommerz',
                'photo' => 'sslcommerz_logo.png',
                'text' => 'After clicking "Pay now" - you will be redirected to SSLCOMMERZ to complete your purchase securely.',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}