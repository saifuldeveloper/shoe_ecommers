<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'language' => 'English',
                'file' => '1744539358qWpD7nW6.json',
                'name' => '1744539358qWpD7nW6',
                'is_default' => 1,
                'rtl' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'type' => 'Website',
            ),
            1 => 
            array (
                'id' => 2,
                'language' => 'Arabic',
                'file' => '1647792286wzAqXQOx.json',
                'name' => '1647792286wzAqXQOx',
                'is_default' => 0,
                'rtl' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'type' => 'Website',
            ),
            2 => 
            array (
                'id' => 3,
                'language' => 'English',
                'file' => '1647794074eEeCbfDD.json',
                'name' => '1647794074eEeCbfDD',
                'is_default' => 1,
                'rtl' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'type' => 'Dashboard',
            ),
            3 => 
            array (
                'id' => 4,
                'language' => 'Arabic',
                'file' => '1638870927JMqjbCXv.json',
                'name' => '1638870927JMqjbCXv',
                'is_default' => 0,
                'rtl' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'type' => 'Dashboard',
            ),
        ));
        
        
    }
}