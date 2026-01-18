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
                'id' => 6,
                'user_id' => NULL,
                'session_id' => 'b75a808fd596e16eddf19c21b48b67d1',
                'item_id' => 17,
                'quantity' => 1,
                'item_variant_id' => NULL,
                'created_at' => '2026-01-07 08:09:25',
                'updated_at' => '2026-01-07 08:09:25',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => NULL,
                'session_id' => 'c941534681248494b4b48e38f3e1dcf9',
                'item_id' => 18,
                'quantity' => 1,
                'item_variant_id' => NULL,
                'created_at' => '2026-01-17 04:06:32',
                'updated_at' => '2026-01-17 04:06:32',
            ),
        ));
        
        
    }
}