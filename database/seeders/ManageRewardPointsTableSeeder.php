<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManageRewardPointsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manage_reward_points')->delete();
        
        \DB::table('manage_reward_points')->insert(array (
            0 => 
            array (
                'id' => 1,
                'reward_point' => '10.00',
                'status' => '0',
                'created_at' => '2026-01-22 05:47:23',
                'updated_at' => '2026-01-22 05:47:23',
            ),
        ));
        
        
    }
}