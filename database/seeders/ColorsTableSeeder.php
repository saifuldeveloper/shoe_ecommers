<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colors')->delete();
        
        \DB::table('colors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Red',
                'code' => '#ff0000',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:24:04',
                'updated_at' => '2025-09-24 01:24:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Black',
                'code' => '#0f0f0f',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:24:13',
                'updated_at' => '2025-09-24 01:24:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Blue',
                'code' => '#2d49d2',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-11-27 14:00:26',
                'updated_at' => '2025-11-27 14:00:26',
            ),
        ));
        
        
    }
}