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
                'deleted_at' => '2026-02-01 15:33:02',
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:24:04',
                'updated_at' => '2026-02-01 15:33:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Black',
                'code' => '#0f0f0f',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:24:13',
                'updated_at' => '2025-09-24 07:24:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Blue',
                'code' => '#2d49d2',
                'status' => 1,
                'deleted_at' => '2026-02-01 15:33:00',
                'deleted_by' => NULL,
                'created_at' => '2025-11-27 20:00:26',
                'updated_at' => '2026-02-01 15:33:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pink',
                'code' => '#ff80c0',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 06:20:43',
                'updated_at' => '2026-02-01 17:52:15',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cream',
                'code' => '#fdf5c8',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 15:38:11',
                'updated_at' => '2026-02-01 15:38:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Brown',
                'code' => '#e0c8b6',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 17:53:50',
                'updated_at' => '2026-02-01 17:53:50',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Maroon',
                'code' => '#550000',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 17:55:06',
                'updated_at' => '2026-02-01 17:55:06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Silver',
                'code' => '#E2E5E6',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:06:52',
                'updated_at' => '2026-02-05 15:06:52',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'White',
                'code' => '#ffffff',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-17 13:09:47',
                'updated_at' => '2026-02-17 13:09:47',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Sky Blue',
                'code' => '#82d7ff',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-17 13:28:35',
                'updated_at' => '2026-02-17 13:28:35',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Chocolate',
                'code' => '#a75454',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-17 16:06:27',
                'updated_at' => '2026-02-17 16:06:27',
            ),
        ));
        
        
    }
}