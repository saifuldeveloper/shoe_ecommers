<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sizes')->delete();
        
        \DB::table('sizes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '38',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:19:50',
                'updated_at' => '2025-09-24 01:19:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '39',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:23:33',
                'updated_at' => '2025-09-24 01:23:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '40',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:23:38',
                'updated_at' => '2025-09-24 01:23:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '41',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:23:43',
                'updated_at' => '2025-09-24 01:23:43',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '42',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:23:48',
                'updated_at' => '2025-09-24 01:23:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '43',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:23:53',
                'updated_at' => '2025-09-24 01:23:53',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '44',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 01:23:57',
                'updated_at' => '2025-09-24 01:23:57',
            ),
        ));
        
        
    }
}