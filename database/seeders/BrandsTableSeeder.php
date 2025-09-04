<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'Adidas',
                'slug' => 'Adidas',
                'photo' => '1632336527add.png',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Lavie',
                'slug' => 'Lavie',
                'photo' => '1632336517leves.jpg',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Skyart',
                'slug' => 'Skyart',
                'photo' => '1632336538skyart.png',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'Nike',
                'slug' => 'Nike',
                'photo' => '1632336489nike.jpg',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'Samsung',
                'slug' => 'Samsung',
                'photo' => '1632336479samsung.png',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'Yamaha',
                'slug' => 'Yamaha',
                'photo' => '1632336551yamaha.png',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'H.M',
                'slug' => 'HM',
                'photo' => '1632336576hm.jpg',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'Loreal',
                'slug' => 'Loreal',
                'photo' => '1632336591lora.jpg',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 19,
                'name' => 'Ascis',
                'slug' => 'Ascis',
                'photo' => '1632336642ascis.jpg',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 22,
                'name' => 'admin',
                'slug' => 'admin',
                'photo' => 'OM_1756171931bjJ8sjH7.jpeg',
                'status' => 1,
                'is_popular' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}