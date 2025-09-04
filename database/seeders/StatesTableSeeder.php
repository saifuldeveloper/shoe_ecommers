<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 6,
                'name' => 'Alaska',
                'price' => 3.0,
                'status' => 0,
                'type' => 'percentage',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'California',
                'price' => 4.0,
                'status' => 0,
                'type' => 'percentage',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'New Mexico',
                'price' => 5.0,
                'status' => 1,
                'type' => 'percentage',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Utah',
                'price' => 6.0,
                'status' => 1,
                'type' => 'percentage',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'Virginia',
                'price' => 6.0,
                'status' => 1,
                'type' => 'percentage',
            ),
        ));
        
        
    }
}