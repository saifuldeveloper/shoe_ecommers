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
                'title' => 'Fast Delivery',
                'details' => 'Get fast and hassle-free delivery of your orders to your doorstep. Ensuring a seamless and hassle-free experience.',
                'photo' => 'OM_17677645651AyF2SiN.png',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => 32,
                'title' => 'Super Deals',
                'details' => 'Stay updated on all our latest news, offers, and campaigns.',
                'photo' => 'OM_17677645914ZwPQ3kW.svg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => 33,
                'title' => 'Avijatry Rewords',
                'details' => 'Unlock a world of exciting benefits with Apex Rewards loyalty program.',
                'photo' => 'OM_1767764602z0amXZWP.svg',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}