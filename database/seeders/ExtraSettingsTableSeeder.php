<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExtraSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extra_settings')->delete();
        
        \DB::table('extra_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_t4_slider' => 1,
                'is_t4_featured_banner' => 1,
                'is_t4_specialpick' => 1,
                'is_t4_3_column_banner_first' => 1,
                'is_t4_flashdeal' => 1,
                'is_t4_3_column_banner_second' => 1,
                'is_t4_popular_category' => 1,
                'is_t4_2_column_banner' => 1,
                'is_t4_blog_section' => 1,
                'is_t4_brand_section' => 1,
                'is_t4_service_section' => 1,
                'is_t3_slider' => 1,
                'is_t3_service_section' => 1,
                'is_t3_3_column_banner_first' => 1,
                'is_t3_popular_category' => 1,
                'is_t3_flashdeal' => 0,
                'is_t3_3_column_banner_second' => 1,
                'is_t3_pecialpick' => 1,
                'is_t3_brand_section' => 1,
                'is_t3_2_column_banner' => 1,
                'is_t3_blog_section' => 1,
                'is_t2_slider' => 1,
                'is_t2_service_section' => 1,
                'is_t2_3_column_banner_first' => 1,
                'is_t2_flashdeal' => 0,
                'is_t2_new_product' => 1,
                'is_t2_3_column_banner_second' => 1,
                'is_t2_featured_product' => 1,
                'is_t2_bestseller_product' => 1,
                'is_t2_toprated_product' => 1,
                'is_t2_2_column_banner' => 1,
                'is_t2_blog_section' => 1,
                'is_t2_brand_section' => 1,
                'is_t1_falsh' => 1,
                'is_t2_falsh' => 1,
                'is_t3_falsh' => 1,
                'is_t4_falsh' => 1,
                'is_t2_three_column_category' => 0,
                'is_t3_three_column_category' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}