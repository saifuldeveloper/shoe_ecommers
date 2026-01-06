<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FirstHeroSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('first_hero_sections')->delete();
        
        \DB::table('first_hero_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banner_first' => 'banners/VciCCRJ42L8krPT4csCU0AR6oBQlruEFgzPHltKd.jpg',
                'url_first' => '#',
                'created_at' => '2026-01-06 05:46:04',
                'updated_at' => '2026-01-06 05:46:04',
            ),
            1 => 
            array (
                'id' => 2,
                'banner_first' => 'banners/cxZakLt1wKLzsJE4yVGV1rjlarq6HmPP2vsFDAxI.webp',
                'url_first' => '#',
                'created_at' => '2026-01-06 05:46:19',
                'updated_at' => '2026-01-06 05:46:19',
            ),
        ));
        
        
    }
}