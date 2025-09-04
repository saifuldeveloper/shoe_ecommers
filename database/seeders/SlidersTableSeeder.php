<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 7,
                'photo' => '1634222159h3s.jpg',
                'title' => '40% OFF',
                'link' => '#',
                'logo' => '1634222445Untitled-2.png',
                'details' => 'SANROCK U52 Drone with 1080P HD Camera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme3',
            ),
            1 => 
            array (
                'id' => 8,
                'photo' => '1634222112h3s.jpg',
                'title' => '40% OFF',
                'link' => '#',
                'logo' => '1634222436Untitled-1.png',
                'details' => 'Smart Watch New healthy life sleep heart  monitor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme3',
            ),
            2 => 
            array (
                'id' => 10,
                'photo' => '1636898335s1.jpg',
                'title' => '65% OFF',
                'link' => '#',
                'logo' => NULL,
                'details' => 'It is a long established fact that a reader will be distracted by the readable content',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme2',
            ),
            3 => 
            array (
                'id' => 11,
                'photo' => '1636897593s2.jpg',
                'title' => 'theme 4',
                'link' => '#',
                'logo' => NULL,
                'details' => 'theme4',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme4',
            ),
            4 => 
            array (
                'id' => 13,
                'photo' => '1636897586s1.jpg',
                'title' => 'theme 4',
                'link' => '#',
                'logo' => '16342200802.jpg',
                'details' => 'theme4',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme4',
            ),
            5 => 
            array (
                'id' => 16,
                'photo' => '16343905891630493728s2.jpg',
                'title' => '50% OFF',
                'link' => '#',
                'logo' => NULL,
                'details' => 'Sleeve Party Dress',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme1',
            ),
            6 => 
            array (
                'id' => 17,
                'photo' => '16343906281630493865s3.jpg',
                'title' => '70% OFF',
                'link' => '#',
                'logo' => NULL,
                'details' => 'Women Clothing',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme1',
            ),
            7 => 
            array (
                'id' => 18,
                'photo' => '1636898373s2.jpg',
                'title' => '40% OFF',
                'link' => '#',
                'logo' => NULL,
                'details' => 'It is a long established fact that a reader will be distracted by the readable content',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page' => 'theme2',
            ),
        ));
        
        
    }
}