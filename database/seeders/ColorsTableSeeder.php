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
                'created_at' => '2025-09-23 19:24:04',
                'updated_at' => '2025-09-23 19:24:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Black',
                'code' => '#0f0f0f',
                'status' => 1,
                'created_at' => '2025-09-23 19:24:13',
                'updated_at' => '2025-09-23 19:24:13',
            ),
        ));
        
        
    }
}