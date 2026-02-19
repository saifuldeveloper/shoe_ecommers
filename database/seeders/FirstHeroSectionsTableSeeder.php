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
                'banner_first' => 'banners/0hOopGzHuBQ1t51Zke5Fg8z5V5O4BxQPUrWds8hV.jpg',
                'url_first' => '#',
                'created_at' => '2026-01-06 11:46:04',
                'updated_at' => '2026-01-22 15:58:21',
            ),
            1 => 
            array (
                'id' => 2,
                'banner_first' => 'banners/GPNoQYYFz6aztWvsoi8OQkimhGKntLrPJzPVbLfq.jpg',
                'url_first' => '#',
                'created_at' => '2026-01-06 11:46:19',
                'updated_at' => '2026-01-22 15:58:13',
            ),
        ));
        
        
    }
}