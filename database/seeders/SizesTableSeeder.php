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
                'id' => 2,
                'name' => '39',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:23:33',
                'updated_at' => '2026-02-01 17:51:00',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => '40',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:23:38',
                'updated_at' => '2026-02-01 17:51:01',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => '41',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:23:43',
                'updated_at' => '2026-02-01 17:51:03',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => '42',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:23:48',
                'updated_at' => '2026-02-01 17:51:04',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => '43',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:23:53',
                'updated_at' => '2026-02-01 17:51:05',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => '44',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2025-09-24 07:23:57',
                'updated_at' => '2026-02-01 17:51:08',
            ),
            6 => 
            array (
                'id' => 20,
                'name' => '36',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 15:41:39',
                'updated_at' => '2026-02-01 17:49:56',
            ),
            7 => 
            array (
                'id' => 21,
                'name' => '37',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 15:41:48',
                'updated_at' => '2026-02-01 17:49:59',
            ),
            8 => 
            array (
                'id' => 22,
                'name' => '38',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:12:00',
                'updated_at' => '2026-02-01 17:50:19',
            ),
            9 => 
            array (
                'id' => 23,
                'name' => '12',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:14:26',
                'updated_at' => '2026-02-01 17:49:30',
            ),
            10 => 
            array (
                'id' => 24,
                'name' => '13',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:14:31',
                'updated_at' => '2026-02-01 17:49:36',
            ),
            11 => 
            array (
                'id' => 25,
                'name' => '14',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:14:35',
                'updated_at' => '2026-02-01 17:49:40',
            ),
            12 => 
            array (
                'id' => 26,
                'name' => '15',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:14:39',
                'updated_at' => '2026-02-01 17:49:42',
            ),
            13 => 
            array (
                'id' => 27,
                'name' => '16',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:15:04',
                'updated_at' => '2026-02-01 17:49:44',
            ),
            14 => 
            array (
                'id' => 28,
                'name' => '17',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:15:08',
                'updated_at' => '2026-02-01 17:49:47',
            ),
            15 => 
            array (
                'id' => 29,
                'name' => '18',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:15:22',
                'updated_at' => '2026-02-01 17:49:49',
            ),
            16 => 
            array (
                'id' => 30,
                'name' => '45',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-01 16:15:31',
                'updated_at' => '2026-02-01 17:51:07',
            ),
            17 => 
            array (
                'id' => 32,
                'name' => '1',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 14:06:27',
                'updated_at' => '2026-02-05 14:06:27',
            ),
            18 => 
            array (
                'id' => 33,
                'name' => '2',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 14:06:32',
                'updated_at' => '2026-02-05 14:06:32',
            ),
            19 => 
            array (
                'id' => 34,
                'name' => '3',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 14:06:36',
                'updated_at' => '2026-02-05 14:06:36',
            ),
            20 => 
            array (
                'id' => 35,
                'name' => '4',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 14:06:40',
                'updated_at' => '2026-02-05 14:06:40',
            ),
            21 => 
            array (
                'id' => 36,
                'name' => '32',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:05:14',
                'updated_at' => '2026-02-05 15:05:14',
            ),
            22 => 
            array (
                'id' => 37,
                'name' => '33',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:05:18',
                'updated_at' => '2026-02-05 15:05:18',
            ),
            23 => 
            array (
                'id' => 38,
                'name' => '34',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:05:22',
                'updated_at' => '2026-02-05 15:05:22',
            ),
            24 => 
            array (
                'id' => 39,
                'name' => '35',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:05:28',
                'updated_at' => '2026-02-05 15:05:28',
            ),
            25 => 
            array (
                'id' => 40,
                'name' => '23',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:47:27',
                'updated_at' => '2026-02-05 15:47:27',
            ),
            26 => 
            array (
                'id' => 41,
                'name' => '24',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:47:32',
                'updated_at' => '2026-02-05 15:47:32',
            ),
            27 => 
            array (
                'id' => 42,
                'name' => '25',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:47:36',
                'updated_at' => '2026-02-05 15:47:36',
            ),
            28 => 
            array (
                'id' => 43,
                'name' => '26',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:47:40',
                'updated_at' => '2026-02-05 15:47:40',
            ),
            29 => 
            array (
                'id' => 44,
                'name' => '27',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:47:45',
                'updated_at' => '2026-02-05 15:47:45',
            ),
            30 => 
            array (
                'id' => 45,
                'name' => '28',
                'status' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'created_at' => '2026-02-05 15:47:48',
                'updated_at' => '2026-02-05 15:47:48',
            ),
        ));
        
        
    }
}