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
                'created_at' => '2025-09-23 18:39:39',
                'updated_at' => '2025-09-23 18:39:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Women',
                'slug' => 'Women',
                'category_id' => 1,
 
                'status' => 1,
                'created_at' => '2025-09-23 18:40:01',
                'updated_at' => '2025-09-23 18:40:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kids',
                'slug' => 'Kids',
                 'category_id' => 1,

                'status' => 1,
                'created_at' => '2025-09-23 18:41:13',
                'updated_at' => '2025-09-23 18:41:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Accessories',
                'slug' => 'Accessories',
                'category_id' => 1,
                'status' => 1,
                'created_at' => '2025-09-23 18:41:40',
                'updated_at' => '2025-09-23 18:41:40',
            ),
        ));
        
        
    }
}