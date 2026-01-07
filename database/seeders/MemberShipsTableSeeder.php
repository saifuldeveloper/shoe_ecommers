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
        
        \DB::table('member_ships')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'total_purchase' => '0.00',
                'membership_level' => 'Normal',
                'discount_percent' => 0,
                'created_at' => '2026-01-07 04:00:40',
                'updated_at' => '2026-01-07 04:00:40',
            ),
        ));
        
        
    }
}