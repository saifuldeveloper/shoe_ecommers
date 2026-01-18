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
        
        
        
    }
}