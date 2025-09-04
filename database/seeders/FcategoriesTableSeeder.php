<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fcategories')->delete();
        
        \DB::table('fcategories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Electronics !',
                'text' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born',
                'slug' => 'Electronics-',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Poroduct Delevery !',
                'text' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born',
                'slug' => 'Poroduct-Delevery-',
                'meta_keywords' => '[{"value":"a"},{"value":"b"},{"value":"c"}]',
                'meta_descriptions' => 'It is a long established fact that a r',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Discount Policy !',
                'text' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born',
                'slug' => 'Discount-Policy-',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Vat Information !',
                'text' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born',
                'slug' => 'Vat-Information-',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Coupon  Information !',
                'text' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born',
                'slug' => 'Coupon--Information-',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Offer Information !',
                'text' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born',
                'slug' => 'Offer-Information-',
                'meta_keywords' => NULL,
                'meta_descriptions' => NULL,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}