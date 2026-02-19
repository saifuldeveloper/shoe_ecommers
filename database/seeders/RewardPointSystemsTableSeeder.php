<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RewardPointSystemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reward_point_systems')->delete();
        
        \DB::table('reward_point_systems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sold_amount_per_point' => '100.00',
                'min_sold_amount_to_get_point' => '3000.00',
                'redeem_amount_per_unit_point' => '500.00',
                'min_order_total_to_redeem_points' => '5000.00',
                'max_redeem_point_per_order' => '0.00',
                'min_redeem_point' => '0.00',
                'created_at' => '2026-01-22 11:47:07',
                'updated_at' => '2026-01-22 11:47:07',
            ),
        ));
        
        
    }
}