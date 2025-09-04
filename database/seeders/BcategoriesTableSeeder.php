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
        

         \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('bcategories')->delete();
        
        \DB::table('bcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Beauty',
                'slug' => 'Beauty',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fashion',
                'slug' => 'fashion',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}