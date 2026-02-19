<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VariantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('variants')->delete();
        
        \DB::table('variants')->insert(array (
            0 => 
            array (
                'id' => 16,
                'name' => 'Red/1',
                'color_id' => 1,
                'size_id' => 1,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            1 => 
            array (
                'id' => 17,
                'name' => 'Red/2',
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            2 => 
            array (
                'id' => 18,
                'name' => 'Red/3',
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            3 => 
            array (
                'id' => 19,
                'name' => 'Red/4',
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Red/5',
                'color_id' => 1,
                'size_id' => 5,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Red/6',
                'color_id' => 1,
                'size_id' => 6,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Black/1',
                'color_id' => 2,
                'size_id' => 1,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'Black/2',
                'color_id' => 2,
                'size_id' => 2,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            8 => 
            array (
                'id' => 24,
                'name' => 'Black/3',
                'color_id' => 2,
                'size_id' => 3,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            9 => 
            array (
                'id' => 25,
                'name' => 'Black/4',
                'color_id' => 2,
                'size_id' => 4,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            10 => 
            array (
                'id' => 26,
                'name' => 'Black/5',
                'color_id' => 2,
                'size_id' => 5,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            11 => 
            array (
                'id' => 27,
                'name' => 'Black/6',
                'color_id' => 2,
                'size_id' => 6,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            12 => 
            array (
                'id' => 28,
                'name' => 'Blue/4',
                'color_id' => 3,
                'size_id' => 4,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            13 => 
            array (
                'id' => 29,
                'name' => 'Blue/5',
                'color_id' => 3,
                'size_id' => 5,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            14 => 
            array (
                'id' => 30,
                'name' => 'Blue/6',
                'color_id' => 3,
                'size_id' => 6,
                'created_at' => '2025-10-14 17:54:53',
                'updated_at' => '2025-10-14 17:54:53',
            ),
            15 => 
            array (
                'id' => 31,
                'name' => 'Blue/44',
                'color_id' => 3,
                'size_id' => 7,
                'created_at' => '2025-11-27 22:03:46',
                'updated_at' => '2025-11-27 22:03:46',
            ),
            16 => 
            array (
                'id' => 32,
                'name' => 'Blue/43',
                'color_id' => 3,
                'size_id' => 6,
                'created_at' => '2025-11-27 22:03:46',
                'updated_at' => '2025-11-27 22:03:46',
            ),
            17 => 
            array (
                'id' => 33,
                'name' => 'Blue/42',
                'color_id' => 3,
                'size_id' => 5,
                'created_at' => '2025-11-27 22:03:46',
                'updated_at' => '2025-11-27 22:03:46',
            ),
            18 => 
            array (
                'id' => 34,
                'name' => 'Black/44',
                'color_id' => 2,
                'size_id' => 7,
                'created_at' => '2025-11-27 22:03:46',
                'updated_at' => '2025-11-27 22:03:46',
            ),
            19 => 
            array (
                'id' => 35,
                'name' => 'Black/43',
                'color_id' => 2,
                'size_id' => 6,
                'created_at' => '2025-11-27 22:03:46',
                'updated_at' => '2025-11-27 22:03:46',
            ),
            20 => 
            array (
                'id' => 36,
                'name' => 'Black/42',
                'color_id' => 2,
                'size_id' => 5,
                'created_at' => '2025-11-27 22:03:46',
                'updated_at' => '2025-11-27 22:03:46',
            ),
            21 => 
            array (
                'id' => 37,
                'name' => 'Blue/41',
                'color_id' => 3,
                'size_id' => 4,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            22 => 
            array (
                'id' => 38,
                'name' => 'Blue/40',
                'color_id' => 3,
                'size_id' => 3,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            23 => 
            array (
                'id' => 39,
                'name' => 'Blue/39',
                'color_id' => 3,
                'size_id' => 2,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            24 => 
            array (
                'id' => 40,
                'name' => 'Black/41',
                'color_id' => 2,
                'size_id' => 4,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            25 => 
            array (
                'id' => 41,
                'name' => 'Black/40',
                'color_id' => 2,
                'size_id' => 3,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            26 => 
            array (
                'id' => 42,
                'name' => 'Black/39',
                'color_id' => 2,
                'size_id' => 2,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            27 => 
            array (
                'id' => 43,
                'name' => 'Red/44',
                'color_id' => 1,
                'size_id' => 7,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            28 => 
            array (
                'id' => 44,
                'name' => 'Red/43',
                'color_id' => 1,
                'size_id' => 6,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            29 => 
            array (
                'id' => 45,
                'name' => 'Red/42',
                'color_id' => 1,
                'size_id' => 5,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            30 => 
            array (
                'id' => 46,
                'name' => 'Red/41',
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            31 => 
            array (
                'id' => 47,
                'name' => 'Red/40',
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            32 => 
            array (
                'id' => 48,
                'name' => 'Red/39',
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => '2025-11-29 18:40:03',
                'updated_at' => '2025-11-29 18:40:03',
            ),
            33 => 
            array (
                'id' => 49,
                'name' => 'Black/18',
                'color_id' => 2,
                'size_id' => 14,
                'created_at' => '2026-01-17 06:28:41',
                'updated_at' => '2026-01-17 06:28:41',
            ),
            34 => 
            array (
                'id' => 50,
                'name' => 'Black/17',
                'color_id' => 2,
                'size_id' => 13,
                'created_at' => '2026-01-17 06:28:41',
                'updated_at' => '2026-01-17 06:28:41',
            ),
            35 => 
            array (
                'id' => 51,
                'name' => 'Black/16',
                'color_id' => 2,
                'size_id' => 12,
                'created_at' => '2026-01-17 06:28:41',
                'updated_at' => '2026-01-17 06:28:41',
            ),
            36 => 
            array (
                'id' => 52,
                'name' => 'Black/45',
                'color_id' => 2,
                'size_id' => 15,
                'created_at' => '2026-01-17 06:32:10',
                'updated_at' => '2026-01-17 06:32:10',
            ),
            37 => 
            array (
                'id' => 53,
                'name' => 'Black/9',
                'color_id' => 2,
                'size_id' => 19,
                'created_at' => '2026-01-17 06:45:48',
                'updated_at' => '2026-01-17 06:45:48',
            ),
            38 => 
            array (
                'id' => 54,
                'name' => 'Black/8',
                'color_id' => 2,
                'size_id' => 18,
                'created_at' => '2026-01-17 06:45:48',
                'updated_at' => '2026-01-17 06:45:48',
            ),
            39 => 
            array (
                'id' => 55,
                'name' => 'Black/7',
                'color_id' => 2,
                'size_id' => 17,
                'created_at' => '2026-01-17 06:45:48',
                'updated_at' => '2026-01-17 06:45:48',
            ),
            40 => 
            array (
                'id' => 56,
                'name' => 'Black/6',
                'color_id' => 2,
                'size_id' => 16,
                'created_at' => '2026-01-17 06:45:48',
                'updated_at' => '2026-01-17 06:45:48',
            ),
            41 => 
            array (
                'id' => 57,
                'name' => 'Cream/37',
                'color_id' => 5,
                'size_id' => 21,
                'created_at' => '2026-02-01 16:01:29',
                'updated_at' => '2026-02-01 16:01:29',
            ),
            42 => 
            array (
                'id' => 58,
                'name' => 'Cream/36',
                'color_id' => 5,
                'size_id' => 20,
                'created_at' => '2026-02-01 16:01:29',
                'updated_at' => '2026-02-01 16:01:29',
            ),
            43 => 
            array (
                'id' => 59,
                'name' => 'Cream/39',
                'color_id' => 5,
                'size_id' => 2,
                'created_at' => '2026-02-01 16:01:29',
                'updated_at' => '2026-02-01 16:01:29',
            ),
            44 => 
            array (
                'id' => 60,
                'name' => 'Cream/38',
                'color_id' => 5,
                'size_id' => 1,
                'created_at' => '2026-02-01 16:01:29',
                'updated_at' => '2026-02-01 16:01:29',
            ),
            45 => 
            array (
                'id' => 61,
                'name' => 'Cream/38',
                'color_id' => 5,
                'size_id' => NULL,
                'created_at' => '2026-02-01 16:22:35',
                'updated_at' => '2026-02-01 16:22:35',
            ),
            46 => 
            array (
                'id' => 62,
                'name' => 'Cream/38',
                'color_id' => 5,
                'size_id' => 22,
                'created_at' => '2026-02-01 17:29:15',
                'updated_at' => '2026-02-01 17:29:15',
            ),
            47 => 
            array (
                'id' => 63,
                'name' => 'Maroon/38',
                'color_id' => 7,
                'size_id' => 22,
                'created_at' => '2026-02-01 18:25:25',
                'updated_at' => '2026-02-01 18:25:25',
            ),
            48 => 
            array (
                'id' => 64,
                'name' => 'Maroon/37',
                'color_id' => 7,
                'size_id' => 21,
                'created_at' => '2026-02-01 18:25:25',
                'updated_at' => '2026-02-01 18:25:25',
            ),
            49 => 
            array (
                'id' => 65,
                'name' => 'Maroon/36',
                'color_id' => 7,
                'size_id' => 20,
                'created_at' => '2026-02-01 18:25:25',
                'updated_at' => '2026-02-01 18:25:25',
            ),
            50 => 
            array (
                'id' => 66,
                'name' => 'Maroon/39',
                'color_id' => 7,
                'size_id' => 2,
                'created_at' => '2026-02-01 18:25:25',
                'updated_at' => '2026-02-01 18:25:25',
            ),
            51 => 
            array (
                'id' => 67,
                'name' => 'Black/38',
                'color_id' => 2,
                'size_id' => 22,
                'created_at' => '2026-02-01 18:46:53',
                'updated_at' => '2026-02-01 18:46:53',
            ),
            52 => 
            array (
                'id' => 68,
                'name' => 'Black/37',
                'color_id' => 2,
                'size_id' => 21,
                'created_at' => '2026-02-01 18:46:53',
                'updated_at' => '2026-02-01 18:46:53',
            ),
            53 => 
            array (
                'id' => 69,
                'name' => 'Black/36',
                'color_id' => 2,
                'size_id' => 20,
                'created_at' => '2026-02-01 18:46:53',
                'updated_at' => '2026-02-01 18:46:53',
            ),
            54 => 
            array (
                'id' => 70,
                'name' => 'Black/4',
                'color_id' => 2,
                'size_id' => 35,
                'created_at' => '2026-02-05 14:46:58',
                'updated_at' => '2026-02-05 14:46:58',
            ),
            55 => 
            array (
                'id' => 71,
                'name' => 'Black/3',
                'color_id' => 2,
                'size_id' => 34,
                'created_at' => '2026-02-05 14:46:58',
                'updated_at' => '2026-02-05 14:46:58',
            ),
            56 => 
            array (
                'id' => 72,
                'name' => 'Black/2',
                'color_id' => 2,
                'size_id' => 33,
                'created_at' => '2026-02-05 14:46:58',
                'updated_at' => '2026-02-05 14:46:58',
            ),
            57 => 
            array (
                'id' => 73,
                'name' => 'Black/1',
                'color_id' => 2,
                'size_id' => 32,
                'created_at' => '2026-02-05 14:46:58',
                'updated_at' => '2026-02-05 14:46:58',
            ),
            58 => 
            array (
                'id' => 74,
                'name' => 'Silver/35',
                'color_id' => 8,
                'size_id' => 39,
                'created_at' => '2026-02-05 15:17:12',
                'updated_at' => '2026-02-05 15:17:12',
            ),
            59 => 
            array (
                'id' => 75,
                'name' => 'Silver/34',
                'color_id' => 8,
                'size_id' => 38,
                'created_at' => '2026-02-05 15:17:12',
                'updated_at' => '2026-02-05 15:17:12',
            ),
            60 => 
            array (
                'id' => 76,
                'name' => 'Silver/33',
                'color_id' => 8,
                'size_id' => 37,
                'created_at' => '2026-02-05 15:17:12',
                'updated_at' => '2026-02-05 15:17:12',
            ),
            61 => 
            array (
                'id' => 77,
                'name' => 'Silver/32',
                'color_id' => 8,
                'size_id' => 36,
                'created_at' => '2026-02-05 15:17:12',
                'updated_at' => '2026-02-05 15:17:12',
            ),
            62 => 
            array (
                'id' => 78,
                'name' => 'Pink/18',
                'color_id' => 4,
                'size_id' => 29,
                'created_at' => '2026-02-05 15:36:27',
                'updated_at' => '2026-02-05 15:36:27',
            ),
            63 => 
            array (
                'id' => 79,
                'name' => 'Pink/17',
                'color_id' => 4,
                'size_id' => 28,
                'created_at' => '2026-02-05 15:36:27',
                'updated_at' => '2026-02-05 15:36:27',
            ),
            64 => 
            array (
                'id' => 80,
                'name' => 'Pink/28',
                'color_id' => 4,
                'size_id' => 45,
                'created_at' => '2026-02-05 15:49:42',
                'updated_at' => '2026-02-05 15:49:42',
            ),
            65 => 
            array (
                'id' => 81,
                'name' => 'Pink/27',
                'color_id' => 4,
                'size_id' => 44,
                'created_at' => '2026-02-05 15:49:42',
                'updated_at' => '2026-02-05 15:49:42',
            ),
            66 => 
            array (
                'id' => 82,
                'name' => 'Pink/26',
                'color_id' => 4,
                'size_id' => 43,
                'created_at' => '2026-02-05 15:49:42',
                'updated_at' => '2026-02-05 15:49:42',
            ),
            67 => 
            array (
                'id' => 83,
                'name' => 'Pink/25',
                'color_id' => 4,
                'size_id' => 42,
                'created_at' => '2026-02-05 15:49:42',
                'updated_at' => '2026-02-05 15:49:42',
            ),
            68 => 
            array (
                'id' => 84,
                'name' => 'Pink/24',
                'color_id' => 4,
                'size_id' => 41,
                'created_at' => '2026-02-05 15:49:42',
                'updated_at' => '2026-02-05 15:49:42',
            ),
            69 => 
            array (
                'id' => 85,
                'name' => 'Pink/23',
                'color_id' => 4,
                'size_id' => 40,
                'created_at' => '2026-02-05 15:49:42',
                'updated_at' => '2026-02-05 15:49:42',
            ),
            70 => 
            array (
                'id' => 86,
                'name' => 'Cream/28',
                'color_id' => 5,
                'size_id' => 45,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            71 => 
            array (
                'id' => 87,
                'name' => 'Cream/27',
                'color_id' => 5,
                'size_id' => 44,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            72 => 
            array (
                'id' => 88,
                'name' => 'Cream/26',
                'color_id' => 5,
                'size_id' => 43,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            73 => 
            array (
                'id' => 89,
                'name' => 'Cream/25',
                'color_id' => 5,
                'size_id' => 42,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            74 => 
            array (
                'id' => 90,
                'name' => 'Cream/24',
                'color_id' => 5,
                'size_id' => 41,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            75 => 
            array (
                'id' => 91,
                'name' => 'Cream/23',
                'color_id' => 5,
                'size_id' => 40,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            76 => 
            array (
                'id' => 92,
                'name' => 'Cream/18',
                'color_id' => 5,
                'size_id' => 29,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            77 => 
            array (
                'id' => 93,
                'name' => 'Cream/17',
                'color_id' => 5,
                'size_id' => 28,
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
            ),
            78 => 
            array (
                'id' => 94,
                'name' => 'White/38',
                'color_id' => 9,
                'size_id' => 22,
                'created_at' => '2026-02-17 13:12:17',
                'updated_at' => '2026-02-17 13:12:17',
            ),
            79 => 
            array (
                'id' => 95,
                'name' => 'White/37',
                'color_id' => 9,
                'size_id' => 21,
                'created_at' => '2026-02-17 13:12:17',
                'updated_at' => '2026-02-17 13:12:17',
            ),
            80 => 
            array (
                'id' => 96,
                'name' => 'White/36',
                'color_id' => 9,
                'size_id' => 20,
                'created_at' => '2026-02-17 13:12:17',
                'updated_at' => '2026-02-17 13:12:17',
            ),
            81 => 
            array (
                'id' => 97,
                'name' => 'White/39',
                'color_id' => 9,
                'size_id' => 2,
                'created_at' => '2026-02-17 13:12:17',
                'updated_at' => '2026-02-17 13:12:17',
            ),
            82 => 
            array (
                'id' => 98,
                'name' => 'Sky Blue/38',
                'color_id' => 10,
                'size_id' => 22,
                'created_at' => '2026-02-17 13:30:28',
                'updated_at' => '2026-02-17 13:30:28',
            ),
            83 => 
            array (
                'id' => 99,
                'name' => 'Sky Blue/37',
                'color_id' => 10,
                'size_id' => 21,
                'created_at' => '2026-02-17 13:30:28',
                'updated_at' => '2026-02-17 13:30:28',
            ),
            84 => 
            array (
                'id' => 100,
                'name' => 'Sky Blue/36',
                'color_id' => 10,
                'size_id' => 20,
                'created_at' => '2026-02-17 13:30:28',
                'updated_at' => '2026-02-17 13:30:28',
            ),
            85 => 
            array (
                'id' => 101,
                'name' => 'Sky Blue/39',
                'color_id' => 10,
                'size_id' => 2,
                'created_at' => '2026-02-17 13:30:28',
                'updated_at' => '2026-02-17 13:30:28',
            ),
            86 => 
            array (
                'id' => 102,
                'name' => 'White/41',
                'color_id' => 9,
                'size_id' => 4,
                'created_at' => '2026-02-17 13:39:03',
                'updated_at' => '2026-02-17 13:39:03',
            ),
            87 => 
            array (
                'id' => 103,
                'name' => 'White/40',
                'color_id' => 9,
                'size_id' => 3,
                'created_at' => '2026-02-17 13:39:03',
                'updated_at' => '2026-02-17 13:39:03',
            ),
            88 => 
            array (
                'id' => 104,
                'name' => 'Pink/38',
                'color_id' => 4,
                'size_id' => 22,
                'created_at' => '2026-02-17 13:42:06',
                'updated_at' => '2026-02-17 13:42:06',
            ),
            89 => 
            array (
                'id' => 105,
                'name' => 'Pink/37',
                'color_id' => 4,
                'size_id' => 21,
                'created_at' => '2026-02-17 13:42:06',
                'updated_at' => '2026-02-17 13:42:06',
            ),
            90 => 
            array (
                'id' => 106,
                'name' => 'Pink/36',
                'color_id' => 4,
                'size_id' => 20,
                'created_at' => '2026-02-17 13:42:06',
                'updated_at' => '2026-02-17 13:42:06',
            ),
            91 => 
            array (
                'id' => 107,
                'name' => 'Pink/39',
                'color_id' => 4,
                'size_id' => 2,
                'created_at' => '2026-02-17 13:42:06',
                'updated_at' => '2026-02-17 13:42:06',
            ),
            92 => 
            array (
                'id' => 108,
                'name' => 'Chocolate/42',
                'color_id' => 11,
                'size_id' => 5,
                'created_at' => '2026-02-17 16:08:35',
                'updated_at' => '2026-02-17 16:08:35',
            ),
            93 => 
            array (
                'id' => 109,
                'name' => 'Chocolate/41',
                'color_id' => 11,
                'size_id' => 4,
                'created_at' => '2026-02-17 16:08:35',
                'updated_at' => '2026-02-17 16:08:35',
            ),
            94 => 
            array (
                'id' => 110,
                'name' => 'Chocolate/40',
                'color_id' => 11,
                'size_id' => 3,
                'created_at' => '2026-02-17 16:08:35',
                'updated_at' => '2026-02-17 16:08:35',
            ),
            95 => 
            array (
                'id' => 111,
                'name' => 'Chocolate/39',
                'color_id' => 11,
                'size_id' => 2,
                'created_at' => '2026-02-17 16:08:35',
                'updated_at' => '2026-02-17 16:08:35',
            ),
            96 => 
            array (
                'id' => 112,
                'name' => 'Chocolate/43',
                'color_id' => 11,
                'size_id' => 6,
                'created_at' => '2026-02-17 16:11:36',
                'updated_at' => '2026-02-17 16:11:36',
            ),
            97 => 
            array (
                'id' => 113,
                'name' => 'Brown/42',
                'color_id' => 6,
                'size_id' => 5,
                'created_at' => '2026-02-17 16:39:12',
                'updated_at' => '2026-02-17 16:39:12',
            ),
            98 => 
            array (
                'id' => 114,
                'name' => 'Brown/41',
                'color_id' => 6,
                'size_id' => 4,
                'created_at' => '2026-02-17 16:39:12',
                'updated_at' => '2026-02-17 16:39:12',
            ),
            99 => 
            array (
                'id' => 115,
                'name' => 'Brown/40',
                'color_id' => 6,
                'size_id' => 3,
                'created_at' => '2026-02-17 16:39:12',
                'updated_at' => '2026-02-17 16:39:12',
            ),
            100 => 
            array (
                'id' => 116,
                'name' => 'Brown/39',
                'color_id' => 6,
                'size_id' => 2,
                'created_at' => '2026-02-17 16:39:12',
                'updated_at' => '2026-02-17 16:39:12',
            ),
        ));
        
        
    }
}