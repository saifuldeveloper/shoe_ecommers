<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $variants = [
            [
                'item_id' => 7,
                'photo' => 'gallary7.jpg',
            ],
            [
                'item_id' => 7,
                'photo' => 'gallary7-1.jpg',
            ],
            [
                'item_id' => 7,
                'photo' => 'gallary7-3.jpg',
            ],
        ];
         DB::table('galleries')->insert($variants);
        
    }
}