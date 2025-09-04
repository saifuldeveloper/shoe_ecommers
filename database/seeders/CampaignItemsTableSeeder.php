<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CampaignItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('campaign_items')->delete();
        
        \DB::table('campaign_items')->insert(array (
            0 => 
            array (
                'id' => 33,
                'item_id' => 559,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 34,
                'item_id' => 543,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 35,
                'item_id' => 545,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 36,
                'item_id' => 538,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 37,
                'item_id' => 534,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 38,
                'item_id' => 535,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 39,
                'item_id' => 540,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 40,
                'item_id' => 563,
                'status' => 1,
                'is_feature' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}