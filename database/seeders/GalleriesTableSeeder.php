<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 7,
                'photo' => 'gallary7.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 7,
                'photo' => 'gallary7-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 7,
                'photo' => 'gallary7-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 12,
                'photo' => '7F7qIMG_2047.JPG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'item_id' => 12,
                'photo' => 'Onp9IMG_2048.JPG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'item_id' => 12,
                'photo' => 'l6GvIMG_2049.JPG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'item_id' => 15,
                'photo' => 'uzcoIMG_8560 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'item_id' => 15,
                'photo' => 'qy3UIMG_8561 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'item_id' => 15,
                'photo' => '7eeIIMG_8562 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'item_id' => 15,
                'photo' => '5kkuIMG_8563 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'item_id' => 15,
                'photo' => 'vKNMIMG_8564 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'item_id' => 15,
                'photo' => 'wkJqIMG_8565 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'item_id' => 15,
                'photo' => 'QTPTIMG_8566 copy_1200x800.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'item_id' => 16,
                'photo' => 'TqHy7316229_2_300x.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'item_id' => 17,
                'photo' => 'M4tl5615013_2_300x.avif',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'item_id' => 18,
                'photo' => 'eBMA6018200_2_300x.avif',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'item_id' => 19,
                'photo' => 'ETOC2_14134402-efec-43f8-b885-8ce16d82270d_300x.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'item_id' => 19,
                'photo' => '2yxu7316229_2_300x.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'item_id' => 19,
                'photo' => 'zLYJ5013223_1_1024x1024.webp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}