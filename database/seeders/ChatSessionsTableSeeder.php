<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatSessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_sessions')->delete();
        
        
        
    }
}