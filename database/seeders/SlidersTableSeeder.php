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
                'id' => 20,
                'photo' => 'OM_1758653330t9InuVxo.jpg',
                'title' => NULL,
                'link' => NULL,
                'logo' => NULL,
                'details' => NULL,
                'home_page' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 21,
                'photo' => 'OM_1758653318Y8fOboL6.webp',
                'title' => NULL,
                'link' => 's',
                'logo' => NULL,
                'details' => NULL,
                'home_page' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 22,
                'photo' => 'rPm3slider2.webp',
                'title' => NULL,
                'link' => NULL,
                'logo' => NULL,
                'details' => NULL,
                'home_page' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}