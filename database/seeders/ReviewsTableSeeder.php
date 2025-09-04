<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'item_id' => 587,
                'review' => 'ssssss',
                'subject' => 'ssssssss',
                'rating' => 5.0,
                'status' => 1,
                'created_at' => '2021-10-17 01:29:45',
                'updated_at' => '2021-10-17 01:29:58',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'item_id' => 586,
                'review' => 'I like this product, and the quality is very good too.',
                'subject' => 'Very Good Produc',
                'rating' => 5.0,
                'status' => 1,
                'created_at' => '2021-12-03 08:54:30',
                'updated_at' => '2025-03-01 04:55:26',
            ),
        ));
        
        
    }
}