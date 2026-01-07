<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopCampaignItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('top_campaign_items')->delete();
        
        \DB::table('top_campaign_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'campaign_id' => 1,
                'item_id' => 11,
                'status' => 'active',
                'is_feature' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'campaign_id' => 1,
                'item_id' => 3,
                'status' => 'active',
                'is_feature' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'campaign_id' => 1,
                'item_id' => 2,
                'status' => 'active',
                'is_feature' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}