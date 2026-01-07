<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopCampaignOffersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('top_campaign_offers')->delete();
        
        \DB::table('top_campaign_offers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'campaign_title' => '10% Discount',
                'campaign_slug' => '10-discount',
                'campaign_end_date' => NULL,
                'campaign_status' => 1,
                'campaig_product_charge' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}