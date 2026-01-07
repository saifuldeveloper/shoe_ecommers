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
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            1 => 
            array (
                'id' => 17,
                'name' => 'Red/2',
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            2 => 
            array (
                'id' => 18,
                'name' => 'Red/3',
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            3 => 
            array (
                'id' => 19,
                'name' => 'Red/4',
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Red/5',
                'color_id' => 1,
                'size_id' => 5,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Red/6',
                'color_id' => 1,
                'size_id' => 6,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Black/1',
                'color_id' => 2,
                'size_id' => 1,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'Black/2',
                'color_id' => 2,
                'size_id' => 2,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            8 => 
            array (
                'id' => 24,
                'name' => 'Black/3',
                'color_id' => 2,
                'size_id' => 3,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            9 => 
            array (
                'id' => 25,
                'name' => 'Black/4',
                'color_id' => 2,
                'size_id' => 4,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            10 => 
            array (
                'id' => 26,
                'name' => 'Black/5',
                'color_id' => 2,
                'size_id' => 5,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            11 => 
            array (
                'id' => 27,
                'name' => 'Black/6',
                'color_id' => 2,
                'size_id' => 6,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            12 => 
            array (
                'id' => 28,
                'name' => 'Blue/4',
                'color_id' => 3,
                'size_id' => 4,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            13 => 
            array (
                'id' => 29,
                'name' => 'Blue/5',
                'color_id' => 3,
                'size_id' => 5,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            14 => 
            array (
                'id' => 30,
                'name' => 'Blue/6',
                'color_id' => 3,
                'size_id' => 6,
                'created_at' => '2025-10-14 11:54:53',
                'updated_at' => '2025-10-14 11:54:53',
            ),
            15 => 
            array (
                'id' => 31,
                'name' => 'Blue/44',
                'color_id' => 3,
                'size_id' => 7,
                'created_at' => '2025-11-27 16:03:46',
                'updated_at' => '2025-11-27 16:03:46',
            ),
            16 => 
            array (
                'id' => 32,
                'name' => 'Blue/43',
                'color_id' => 3,
                'size_id' => 6,
                'created_at' => '2025-11-27 16:03:46',
                'updated_at' => '2025-11-27 16:03:46',
            ),
            17 => 
            array (
                'id' => 33,
                'name' => 'Blue/42',
                'color_id' => 3,
                'size_id' => 5,
                'created_at' => '2025-11-27 16:03:46',
                'updated_at' => '2025-11-27 16:03:46',
            ),
            18 => 
            array (
                'id' => 34,
                'name' => 'Black/44',
                'color_id' => 2,
                'size_id' => 7,
                'created_at' => '2025-11-27 16:03:46',
                'updated_at' => '2025-11-27 16:03:46',
            ),
            19 => 
            array (
                'id' => 35,
                'name' => 'Black/43',
                'color_id' => 2,
                'size_id' => 6,
                'created_at' => '2025-11-27 16:03:46',
                'updated_at' => '2025-11-27 16:03:46',
            ),
            20 => 
            array (
                'id' => 36,
                'name' => 'Black/42',
                'color_id' => 2,
                'size_id' => 5,
                'created_at' => '2025-11-27 16:03:46',
                'updated_at' => '2025-11-27 16:03:46',
            ),
            21 => 
            array (
                'id' => 37,
                'name' => 'Blue/41',
                'color_id' => 3,
                'size_id' => 4,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            22 => 
            array (
                'id' => 38,
                'name' => 'Blue/40',
                'color_id' => 3,
                'size_id' => 3,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            23 => 
            array (
                'id' => 39,
                'name' => 'Blue/39',
                'color_id' => 3,
                'size_id' => 2,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            24 => 
            array (
                'id' => 40,
                'name' => 'Black/41',
                'color_id' => 2,
                'size_id' => 4,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            25 => 
            array (
                'id' => 41,
                'name' => 'Black/40',
                'color_id' => 2,
                'size_id' => 3,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            26 => 
            array (
                'id' => 42,
                'name' => 'Black/39',
                'color_id' => 2,
                'size_id' => 2,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            27 => 
            array (
                'id' => 43,
                'name' => 'Red/44',
                'color_id' => 1,
                'size_id' => 7,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            28 => 
            array (
                'id' => 44,
                'name' => 'Red/43',
                'color_id' => 1,
                'size_id' => 6,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            29 => 
            array (
                'id' => 45,
                'name' => 'Red/42',
                'color_id' => 1,
                'size_id' => 5,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            30 => 
            array (
                'id' => 46,
                'name' => 'Red/41',
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            31 => 
            array (
                'id' => 47,
                'name' => 'Red/40',
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
            32 => 
            array (
                'id' => 48,
                'name' => 'Red/39',
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => '2025-11-29 12:40:03',
                'updated_at' => '2025-11-29 12:40:03',
            ),
        ));
        
        
    }
}