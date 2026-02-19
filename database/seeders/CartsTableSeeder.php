<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts')->delete();
        
        \DB::table('carts')->insert(array (
            0 => 
            array (
                'id' => 11,
                'user_id' => NULL,
                'session_id' => '7206bc69f7db2c3d9f7f629c0ac117fd',
                'item_id' => 28,
                'quantity' => 1,
                'item_variant_id' => 42,
                'created_at' => '2026-02-01 22:12:52',
                'updated_at' => '2026-02-01 22:12:52',
            ),
        ));
        
        
    }
}