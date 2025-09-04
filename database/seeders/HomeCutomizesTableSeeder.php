<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeCutomizesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_cutomizes')->delete();
        
        \DB::table('home_cutomizes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banner_first' => '{"title1":"Watch","subtitle1":"50% OFF","firsturl1":"#","title2":"Drone","subtitle2":"40% OFF","firsturl2":"#","title3":"Phone","subtitle3":"30% OFF","firsturl3":"#","img1":"16365336391.jpg","img2":"16365336392.jpg","img3":"16365336393.jpg"}',
                'banner_secend' => '{"title1":"Watch","subtitle1":"50% OFF","url1":"#","title2":"Man","subtitle2":"40% OFF","url2":"#","title3":"Headphone","subtitle3":"60% OFF","url3":"#","img1":"16365342794.jpg","img2":"16365342795.jpg","img3":"16365342796.jpg"}',
                'banner_third' => '{"title1":"Watch","subtitle1":"50% OFF","url1":"#","title2":"Headphones","subtitle2":"40% OFF","url2":"#","img1":"1636534291b22.jpg","img2":"1636534291b11.jpg"}',
                'popular_category' => '{"popular_title":"Popular Categories","category_id1":"18","subcategory_id1":"6","childcategory_id1":null,"category_id2":"19","subcategory_id2":null,"childcategory_id2":null,"category_id3":"21","subcategory_id3":null,"childcategory_id3":null,"category_id4":"22","subcategory_id4":null,"childcategory_id4":null}',
                'two_column_category' => '{"category_id1":"27","subcategory_id1":null,"childcategory_id1":null,"category_id2":"22","subcategory_id2":null,"childcategory_id2":null,"category_id3":"21","subcategory_id3":null,"childcategory_id3":null}',
                'feature_category' => '{"feature_title":"Featured Categories","category_id1":"18","subcategory_id1":null,"childcategory_id1":null,"category_id2":"27","subcategory_id2":null,"childcategory_id2":null,"category_id3":"21","subcategory_id3":null,"childcategory_id3":null,"category_id4":"22","subcategory_id4":null,"childcategory_id4":null}',
                'created_at' => NULL,
                'updated_at' => NULL,
                'home_page4' => '{"label1":"FORMAL","url1":"#","label2":"LIMITEN EDITION","url2":"#","label3":"WOMEN\'S COLLECTION","url3":"#","label4":"SMART CASUALS","url4":"#","label5":"POLO","url5":"#","img1":"16368975771.jpg","img2":"16368975772.jpg","img3":"16368975773.jpg","img4":"16368975774.jpg","img5":"16368975775.jpg"}',
                'home_4_popular_category' => '["18","19","21","27"]',
                'hero_banner' => '{"title1":"Watch","subtitle1":"50% OFF","url1":"#","title2":"Man","subtitle2":"40% OFF","url2":"#","img1":"ONMF222.jpg","img2":"24gX1111.jpg"}',
            ),
        ));
        
        
    }
}