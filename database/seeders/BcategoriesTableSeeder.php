<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bcategories')->delete();
        
        \DB::table('bcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Beauty',
                'slug' => 'Beauty',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fashion',
                'slug' => 'fashion',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}