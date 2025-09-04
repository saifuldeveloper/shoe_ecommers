<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChieldCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chield_categories')->delete();
        
        \DB::table('chield_categories')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'Pajama Sets',
                'slug' => 'Pajama-Sets',
                'category_id' => 18,
                'subcategory_id' => 6,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Women Socks & Hosiery',
                'slug' => 'Women-Socks--Hosiery',
                'category_id' => 18,
                'subcategory_id' => 6,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Shapewer',
                'slug' => 'Shapewer',
                'category_id' => 18,
                'subcategory_id' => 6,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Bras',
                'slug' => 'Bras',
                'category_id' => 18,
                'subcategory_id' => 6,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Wedding Dresses',
                'slug' => 'Wedding-Dresses',
                'category_id' => 18,
                'subcategory_id' => 7,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Prom Dresses',
                'slug' => 'Prom-Dresses',
                'category_id' => 18,
                'subcategory_id' => 7,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Evening Dresses',
                'slug' => 'Evening-Dresses',
                'category_id' => 18,
                'subcategory_id' => 7,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Costumes',
                'slug' => 'Costumes',
                'category_id' => 18,
                'subcategory_id' => 7,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Leggings',
                'slug' => 'Leggings',
                'category_id' => 18,
                'subcategory_id' => 8,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Skirt',
                'slug' => 'Skirt',
                'category_id' => 18,
                'subcategory_id' => 8,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Jeans',
                'slug' => 'Jeans',
                'category_id' => 18,
                'subcategory_id' => 8,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'Pants & Capris',
                'slug' => 'Pants--Capris',
                'category_id' => 18,
                'subcategory_id' => 8,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'Jackets',
                'slug' => 'Jackets',
                'category_id' => 19,
                'subcategory_id' => 9,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'Sweaters',
                'slug' => 'Sweaters',
                'category_id' => 19,
                'subcategory_id' => 9,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'Parkas',
                'slug' => 'Parkas',
                'category_id' => 19,
                'subcategory_id' => 9,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'Down Jackets',
                'slug' => 'Down-Jackets',
                'category_id' => 19,
                'subcategory_id' => 9,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Suits & Blazers',
                'slug' => 'Suits--Blazers',
                'category_id' => 19,
                'subcategory_id' => 9,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'Boxers',
                'slug' => 'Boxers',
                'category_id' => 19,
                'subcategory_id' => 17,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'Briefs',
                'slug' => 'Briefs',
                'category_id' => 19,
                'subcategory_id' => 17,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 24,
                'name' => 'Long Johns',
                'slug' => 'Long-Johns',
                'category_id' => 19,
                'subcategory_id' => 17,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 25,
                'name' => 'Sleep & Lounge',
                'slug' => 'Sleep--Lounge',
                'category_id' => 19,
                'subcategory_id' => 17,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 26,
                'name' => 'Pajama Sets',
                'slug' => 'Pajama-Sets',
                'category_id' => 19,
                'subcategory_id' => 17,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 27,
                'name' => 'Cellphones',
                'slug' => 'Cellphones',
                'category_id' => 21,
                'subcategory_id' => 12,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 28,
                'name' => 'iPhones',
                'slug' => 'iPhones',
                'category_id' => 21,
                'subcategory_id' => 12,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 29,
                'name' => 'Android Phone',
                'slug' => 'Android-Phone',
                'category_id' => 21,
                'subcategory_id' => 12,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 30,
                'name' => 'Phone Bags & Cases',
                'slug' => 'Phone-Bags--Cases',
                'category_id' => 21,
                'subcategory_id' => 13,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 31,
                'name' => 'Mobile Phone Cables',
                'slug' => 'Mobile-Phone-Cables',
                'category_id' => 21,
                'subcategory_id' => 13,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 32,
                'name' => 'Power Bank',
                'slug' => 'Power-Bank',
                'category_id' => 21,
                'subcategory_id' => 13,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 33,
                'name' => 'Screen Protectors',
                'slug' => 'Screen-Protectors',
                'category_id' => 21,
                'subcategory_id' => 13,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 34,
                'name' => 'Shirt',
                'slug' => 'Shirt',
                'category_id' => 19,
                'subcategory_id' => 9,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}