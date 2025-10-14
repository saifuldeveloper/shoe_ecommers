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
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            1 => 
            array (
                'id' => 17,
                'name' => 'Red/2',
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            2 => 
            array (
                'id' => 18,
                'name' => 'Red/3',
                'color_id' => 1,
                'size_id' => 3,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            3 => 
            array (
                'id' => 19,
                'name' => 'Red/4',
                'color_id' => 1,
                'size_id' => 4,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Red/5',
                'color_id' => 1,
                'size_id' => 5,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Red/6',
                'color_id' => 1,
                'size_id' => 6,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Black/1',
                'color_id' => 2,
                'size_id' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'Black/2',
                'color_id' => 2,
                'size_id' => 2,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            8 => 
            array (
                'id' => 24,
                'name' => 'Black/3',
                'color_id' => 2,
                'size_id' => 3,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            9 => 
            array (
                'id' => 25,
                'name' => 'Black/4',
                'color_id' => 2,
                'size_id' => 4,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            10 => 
            array (
                'id' => 26,
                'name' => 'Black/5',
                'color_id' => 2,
                'size_id' => 5,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            11 => 
            array (
                'id' => 27,
                'name' => 'Black/6',
                'color_id' => 2,
                'size_id' => 6,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            12 => 
            array (
                'id' => 28,
                'name' => 'Blue/4',
                'color_id' => 3,
                'size_id' => 4,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            13 => 
            array (
                'id' => 29,
                'name' => 'Blue/5',
                'color_id' => 3,
                'size_id' => 5,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            14 => 
            array (
                'id' => 30,
                'name' => 'Blue/6',
                'color_id' => 3,
                'size_id' => 6,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
        ));
        
        
    }
}