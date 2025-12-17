<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SitemapsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sitemaps')->delete();
        
        \DB::table('sitemaps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sitemap_url' => 'http://localhost/Avijatry30/',
                'filename' => 'sitemap6166b213a58e4.xml',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'sitemap_url' => 'http://localhost/Avijatry30/catalog',
                'filename' => 'sitemap6166b378db752.xml',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}