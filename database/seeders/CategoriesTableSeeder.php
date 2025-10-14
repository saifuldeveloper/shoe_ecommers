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
                'id' => 1,
                'name' => 'Men',
                'slug' => 'Men',
                'parent_id' => NULL,
                'is_in_menu' => 1,
                'menu_serial' => 1,
                'is_featured' => 1,
                'featured_serial' => 1,
                'photo' => 'H5k7men.avif',
                'status' => 1,
                'created_at' => '2025-09-23 18:39:39',
                'updated_at' => '2025-09-23 18:39:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Women',
                'slug' => 'Women',
                'parent_id' => NULL,
                'is_in_menu' => 1,
                'menu_serial' => 2,
                'is_featured' => 1,
                'featured_serial' => 2,
                'photo' => 'bqsfwomen.avif',
                'status' => 1,
                'created_at' => '2025-09-23 18:40:01',
                'updated_at' => '2025-09-23 18:40:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kids',
                'slug' => 'Kids',
                'parent_id' => NULL,
                'is_in_menu' => 1,
                'menu_serial' => 3,
                'is_featured' => 1,
                'featured_serial' => 3,
                'photo' => '8vkgkids.avif',
                'status' => 1,
                'created_at' => '2025-09-23 18:41:13',
                'updated_at' => '2025-09-23 18:41:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Accessories',
                'slug' => 'Accessories',
                'parent_id' => NULL,
                'is_in_menu' => 0,
                'menu_serial' => 0,
                'is_featured' => 1,
                'featured_serial' => 4,
                'photo' => 'OM_1760421533Ib1Pq8UL.jpeg',
                'status' => 1,
                'created_at' => '2025-09-23 18:41:40',
                'updated_at' => '2025-10-14 05:58:53',
            ),
        ));
        
        
    }
}