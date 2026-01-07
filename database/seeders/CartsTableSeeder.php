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
                'id' => 1,
                'user_id' => 1,
                'session_id' => NULL,
                'item_id' => 17,
                'quantity' => 2,
                'item_variant_id' => NULL,
                'created_at' => '2026-01-07 04:53:24',
                'updated_at' => '2026-01-07 05:03:04',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => NULL,
                'session_id' => 'b75a808fd596e16eddf19c21b48b67d1',
                'item_id' => 17,
                'quantity' => 1,
                'item_variant_id' => NULL,
                'created_at' => '2026-01-07 08:09:25',
                'updated_at' => '2026-01-07 08:09:25',
            ),
        ));
        
        
    }
}