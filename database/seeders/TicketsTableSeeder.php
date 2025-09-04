<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tickets')->delete();
        
        \DB::table('tickets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject' => 'I need help',
                'message' => 'I need help',
                'file' => NULL,
                'user_id' => 1,
                'status' => NULL,
                'created_at' => '2021-12-03 12:32:39',
                'updated_at' => '2021-12-03 12:32:39',
            ),
        ));
        
        
    }
}