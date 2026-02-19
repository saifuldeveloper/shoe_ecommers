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
                'id' => 1,
                'name' => 'Men',
                'slug' => 'Men',
                'category_id' => 1,
                'status' => 1,
                'created_at' => '2025-09-24 06:39:39',
                'updated_at' => '2025-09-24 06:39:39',
                'deleted_at' => '2026-02-01 16:07:55',
                'deleted_by' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Casual Shoes',
                'slug' => 'Casual-Shoes',
                'category_id' => 1,
                'status' => 1,
                'created_at' => '2025-09-24 06:40:01',
                'updated_at' => '2025-09-24 06:40:01',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Formal Shoes',
                'slug' => 'Formal-Shoes',
                'category_id' => 1,
                'status' => 1,
                'created_at' => '2025-09-24 06:41:13',
                'updated_at' => '2025-09-24 06:41:13',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mens Sandal',
                'slug' => 'Mens-Sandal-',
                'category_id' => 1,
                'status' => 1,
                'created_at' => '2025-09-24 06:41:40',
                'updated_at' => '2025-09-24 06:41:40',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Womens Sandal',
                'slug' => 'WomensSandal',
                'category_id' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ladies Heel',
                'slug' => 'Ladies-Heel',
                'category_id' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Ladies Casual & Closed Shoes',
                'slug' => 'Ladies-Casual---Closed-Shoes',
                'category_id' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ladies\' Flipflops',
                'slug' => 'Ladies--Flipflops',
                'category_id' => 2,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Boys',
                'slug' => 'Boys',
                'category_id' => 3,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Girls',
                'slug' => 'Girls',
                'category_id' => 3,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}