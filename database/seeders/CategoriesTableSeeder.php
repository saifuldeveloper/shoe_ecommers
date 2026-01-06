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
                'photo' => 'OM_1766037843xUatm6VD.jpg',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 00:39:39',
                'updated_at' => '2025-12-18 12:04:03',
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
                'photo' => 'OM_1766036936tWlT3qtF.jpg',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 00:40:01',
                'updated_at' => '2025-12-18 11:48:56',
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
                'photo' => 'OM_1766038926fgwbpIMe.jpg',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 00:41:13',
                'updated_at' => '2025-12-18 12:22:06',
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
                'photo' => 'OM_1765430027HR8D7cUN.jpg',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 00:41:40',
                'updated_at' => '2025-12-18 12:23:07',
            ),
        ));
        
        
    }
}