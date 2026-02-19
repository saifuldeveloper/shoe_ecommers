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
                'created_at' => '2026-02-05 16:11:59',
                'updated_at' => '2026-02-05 16:11:59',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}