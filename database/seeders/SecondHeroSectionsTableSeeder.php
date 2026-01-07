<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SecondHeroSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('second_hero_sections')->delete();
        
        \DB::table('second_hero_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banner_second' => 'banners/ROftqdEq7K8azET0XcABRu9rG0Hm56ouVSiA4H0Y.jpg',
                'url_second' => '#',
                'created_at' => '2026-01-06 05:46:32',
                'updated_at' => '2026-01-06 05:46:32',
            ),
            1 => 
            array (
                'id' => 2,
                'banner_second' => 'banners/28ANnMPnEEDmAMaSQgDfCa9tfVRL8pGqNHfIOABO.webp',
                'url_second' => '#',
                'created_at' => '2026-01-06 05:46:43',
                'updated_at' => '2026-01-06 05:46:43',
            ),
        ));
        
        
    }
}