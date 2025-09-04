<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 18,
                'name' => 'Women Clothing',
                'slug' => 'Women-Clothing',
                'photo' => '1629616296pexels-juan-mendez-1536619.jpg',
                'meta_keywords' => '[{"value":"women"}]',
                'meta_descriptions' => 'Women Clothing',
                'status' => 1,
                'is_feature' => 1,
                'serial' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 19,
                'name' => 'Men Clothing',
                'slug' => 'men-clothing',
                'photo' => '1629616281pexels-moose-photos-1036627.jpg',
                'meta_keywords' => '[{"value":"men"}]',
                'meta_descriptions' => 'men',
                'status' => 1,
                'is_feature' => 1,
                'serial' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'Electronics',
                'slug' => 'Electronics',
                'photo' => '1629616270computer.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 22,
                'name' => 'Beauty & Personal Care',
                'slug' => 'Beauty--Personal-Care',
                'photo' => '1631023636ballll.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 23,
                'name' => 'Vehicles & Accessories',
                'slug' => 'Vehicles--Accessories',
                'photo' => '1629616254pexels-thales-silva-772393.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 24,
                'name' => 'Sports & Entertainment',
                'slug' => 'Sports--Entertainment',
                'photo' => '1629616243pexels-karolina-grabowska-4498574.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 25,
                'name' => 'Home & Garden',
                'slug' => 'Home--Garden',
                'photo' => '1629616234pexels-cup-of-couple-8015784.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 26,
                'name' => 'Medicine & Health Care',
                'slug' => 'Medicine-Health-Care',
                'photo' => 'OM_1744578120Ru6I75uW.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 27,
                'name' => 'Web Themes & Templates',
                'slug' => 'Web-Themes--Templates',
                'photo' => '1632341620bbb.jpg',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'is_feature' => 1,
                'serial' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 28,
                'name' => 'Biller',
                'slug' => 'safda3',
                'photo' => 'OM_1755501774s87pzKqF.png',
                'meta_keywords' => '[{"value":"asdf"}]',
                'meta_descriptions' => 'asdf',
                'status' => 1,
                'is_feature' => 1,
                'serial' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 29,
                'name' => 'asdfasdfhh',
                'slug' => 'asdfas3d',
                'photo' => 'Kgn9about-Us.png',
                'meta_keywords' => '[{"value":"a"},{"value":"f"},{"value":"s"}]',
                'meta_descriptions' => 'asdfasdfasdf',
                'status' => 1,
                'is_feature' => 1,
                'serial' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 30,
                'name' => 'asdf',
                'slug' => 'asdfasdfasdf',
                'photo' => 'OM_17561710505IJKUi5w.jpeg',
                'meta_keywords' => '[{"value":"asdf"}]',
                'meta_descriptions' => 'asdf',
                'status' => 1,
                'is_feature' => 1,
                'serial' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 31,
                'name' => 'asdf',
                'slug' => 'asdf',
            'photo' => 'fh7vdownload (1).jpeg',
                'meta_keywords' => '[{"value":"asdf"}]',
                'meta_descriptions' => 'asdf',
                'status' => 1,
                'is_feature' => 1,
                'serial' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}