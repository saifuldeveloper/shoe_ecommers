<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fcategories')->delete();
        
        \DB::table('fcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'brand shoes',
                'text' => 'brand shoes',
                'slug' => 'brand-shoes',
                'meta_keywords' => '[{"value":"juta"}]',
                'meta_descriptions' => 'hjyuyjh',
                'status' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'antor',
                'text' => 'aee',
                'slug' => 'antor',
                'meta_keywords' => '[{"value":"aerfe"}]',
                'meta_descriptions' => 'aeerf',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}