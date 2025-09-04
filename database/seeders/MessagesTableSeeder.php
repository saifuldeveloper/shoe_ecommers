<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ticket_id' => 1,
                'user_id' => 1,
                'message' => 'test',
                'created_at' => '2021-12-03 12:33:29',
                'updated_at' => '2021-12-03 12:33:29',
            ),
        ));
        
        
    }
}