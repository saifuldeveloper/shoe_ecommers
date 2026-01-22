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
                'id' => 21,
                'photo' => 'OM_17660516362i0mxKiU.jpg',
                'mobile_photo' => 'OM_1769061140CKC2lVYx.webp',
                'title' => NULL,
                'link' => 'https://www.facebook.com/avijatry/',
                'logo' => NULL,
                'details' => NULL,
                'home_page' => 0,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 22,
                'photo' => 'OM_1765436873BmUuTpK7.jpg',
                'mobile_photo' => 'OM_1769061131NK0LukBC.webp',
                'title' => NULL,
                'link' => 'https://www.facebook.com/avijatry/',
                'logo' => NULL,
                'details' => NULL,
                'home_page' => 0,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 23,
                'photo' => 'OM_1765431590YG1tQgFH.jpg',
                'mobile_photo' => 'OM_1769061148rnv1VmkZ.webp',
                'title' => NULL,
                'link' => NULL,
                'logo' => NULL,
                'details' => NULL,
                'home_page' => 0,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}