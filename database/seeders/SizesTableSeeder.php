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
            7 => 
            array (
                'id' => 8,
                'name' => '12',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:21:25',
                'updated_at' => '2026-01-17 00:21:25',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '13',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:21:32',
                'updated_at' => '2026-01-17 00:21:32',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '14',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:21:41',
                'updated_at' => '2026-01-17 00:21:41',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '15',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:21:48',
                'updated_at' => '2026-01-17 00:21:48',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '16',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:24:32',
                'updated_at' => '2026-01-17 00:24:32',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '17',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:24:39',
                'updated_at' => '2026-01-17 00:24:39',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '18',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:24:48',
                'updated_at' => '2026-01-17 00:24:48',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '45',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:29:22',
                'updated_at' => '2026-01-17 00:29:22',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '6',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:43:34',
                'updated_at' => '2026-01-17 00:43:34',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '7',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:43:39',
                'updated_at' => '2026-01-17 00:43:39',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '8',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:43:45',
                'updated_at' => '2026-01-17 00:43:45',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '9',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-01-17 00:43:51',
                'updated_at' => '2026-01-17 00:43:51',
            ),
        ));
        
        
    }
}