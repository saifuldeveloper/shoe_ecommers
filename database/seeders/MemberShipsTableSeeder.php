<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MemberShipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('member_ships')->delete();
        
        
        
    }
}