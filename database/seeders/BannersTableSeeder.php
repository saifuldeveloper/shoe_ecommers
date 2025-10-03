<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Shein Womens Clothing 2021 Summer Fashion Design Clothing Manufacturer Lantern Long Sleeve',
                'subtitle' => '45% OFF',
                'url' => '#',
                'image' => 'GIfnimage6.webp',
                'type' => ' Banner 1',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Casual Minimalist Tie Waist women clothing Denim Halter Midi Pencil Sling Dresses',
                'subtitle' => '70% OFF',
                'url' => '#',
                'image' => 'NXkjimage5.webp',
                'type' => 'Banner 2',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Top Sale High Quality Newest Designs Custom Women Clothing Wholesale from China Dresses',
                'subtitle' => '60% OFF',
                'url' => '#',
                'image' => 'rvyRimage5.webp',
                'type' => 'Banner 3',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'title' => '2021 Summer Women Clothing Ropa Sexy Lady Cut Out Halter Mini Dresses',
                'subtitle' => '50% OFF',
                'url' => '#',
                'image' => 'YtCeimage6.webp',
                'type' => 'Banner 4',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}