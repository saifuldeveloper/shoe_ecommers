<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrackOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('track_orders')->delete();
        
        \DB::table('track_orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'title' => 'Pending',
                'created_at' => '2025-11-29 12:57:34',
                'updated_at' => '2025-11-29 12:57:34',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 2,
                'title' => 'Pending',
                'created_at' => '2025-12-09 16:23:04',
                'updated_at' => '2025-12-09 16:23:04',
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 3,
                'title' => 'Pending',
                'created_at' => '2025-12-09 16:31:46',
                'updated_at' => '2025-12-09 16:31:46',
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 4,
                'title' => 'Pending',
                'created_at' => '2025-12-11 21:37:26',
                'updated_at' => '2025-12-11 21:37:26',
            ),
        ));
        
        
    }
}