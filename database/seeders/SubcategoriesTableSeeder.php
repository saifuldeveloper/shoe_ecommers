<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subcategories')->delete();
        
        \DB::table('subcategories')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'Women\'s Underwear',
                'slug' => 'Womens-Underwear',
                'category_id' => 18,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Weddings & Events',
                'slug' => 'Weddings--Events',
                'category_id' => 18,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Bottoms',
                'slug' => 'Bottoms',
                'category_id' => 18,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Outerwear & Jackets',
                'slug' => 'Outerwear--Jackets',
                'category_id' => 19,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'Bottoms',
                'slug' => 'Bottoms',
                'category_id' => 19,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 12,
                'name' => 'Mobile Phones',
                'slug' => 'Mobile-Phones',
                'category_id' => 21,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 13,
                'name' => 'Mobile Phone Accessories',
                'slug' => 'Mobile-Phone-Accessories',
                'category_id' => 21,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 15,
                'name' => 'Women\'s Fashion',
                'slug' => 'Womens-Fashion',
                'category_id' => 18,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 16,
                'name' => 'Accessories',
                'slug' => 'Accessories',
                'category_id' => 18,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 17,
                'name' => 'Underwear',
                'slug' => 'Underwear',
                'category_id' => 19,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 18,
                'name' => 'Accessories',
                'slug' => 'Accessories',
                'category_id' => 19,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'Laptop',
                'slug' => 'Laptop',
                'category_id' => 21,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 20,
                'name' => 'Computer',
                'slug' => 'Computer',
                'category_id' => 21,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'Featured Accessories',
                'slug' => 'Featured-Accessories',
                'category_id' => 21,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 22,
                'name' => 'DSLR',
                'slug' => 'DSLR',
                'category_id' => 21,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 23,
                'name' => 'Hair Weaves',
                'slug' => 'Hair-Weaves',
                'category_id' => 22,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 24,
                'name' => 'Makeup',
                'slug' => 'Makeup',
                'category_id' => 22,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 25,
                'name' => 'Nail Art & Tools',
                'slug' => 'Nail-Art--Tools',
                'category_id' => 22,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 26,
                'name' => 'Skin Care',
                'slug' => 'Skin-Care',
                'category_id' => 22,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 27,
                'name' => 'Personal Care',
                'slug' => 'Personal-Care',
                'category_id' => 22,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 28,
                'name' => 'Bike',
                'slug' => 'Bike',
                'category_id' => 23,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'name' => 'Car',
                'slug' => 'Car',
                'category_id' => 23,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 30,
                'name' => 'WordPress Themes',
                'slug' => 'WordPress-Themes',
                'category_id' => 27,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 31,
                'name' => 'Laravel CMS',
                'slug' => 'Laravel-CMS',
                'category_id' => 27,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 32,
                'name' => 'HTML Templates',
                'slug' => 'HTML-Templates',
                'category_id' => 27,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}