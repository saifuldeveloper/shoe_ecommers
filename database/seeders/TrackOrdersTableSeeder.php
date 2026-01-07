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
                'order_id' => 5,
                'title' => 'Pending',
                'created_at' => '2026-01-07 05:15:35',
                'updated_at' => '2026-01-07 05:15:35',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 6,
                'title' => 'Pending',
                'created_at' => '2026-01-07 08:09:14',
                'updated_at' => '2026-01-07 08:09:14',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}