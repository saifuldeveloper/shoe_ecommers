<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('socials')->delete();
        
        \DB::table('socials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'link' => 'https://www.facebook.com/',
                'icon' => 'fab fa-facebook-square',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'link' => 'https://twitter.com/',
                'icon' => 'fab fa-twitter-square',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'link' => 'https://www.instagram.com/',
                'icon' => 'fab fa-instagram',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'link' => 'https://www.pinterest.com/',
                'icon' => 'fab fa-pinterest-square',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}