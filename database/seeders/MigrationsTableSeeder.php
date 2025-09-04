<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2021_08_21_073142_create_admins_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2021_08_21_073507_create_users_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2021_09_20_144419_create_items_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2021_09_20_151605_create_settings_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2021_09_21_073848_create_attributes_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2021_09_21_073951_create_attribute_options_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2021_09_21_074028_create_banners_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2021_09_21_074231_create_bcategories_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2021_09_21_074309_create_brands_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2021_09_21_074412_create_campaign_items_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2021_09_21_074536_create_categories_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2021_09_21_074744_create_chield_categories_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2021_09_21_074952_create_countries_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2021_09_21_075024_create_currencies_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2021_09_21_075231_create_email_templates_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2021_09_21_075346_create_faqs_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2021_09_21_075642_create_fcategories_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2021_09_21_080223_create_galleries_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2021_09_21_080320_create_home_cutomizes_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2021_09_21_080454_create_languages_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2021_09_21_080652_create_messages_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2021_09_21_080805_create_notifications_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2021_09_21_090957_create_orders_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'migration' => '2021_09_21_092255_create_payment_settings_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 26,
                'migration' => '2021_09_21_092722_create_posts_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 27,
                'migration' => '2021_09_21_092801_create_promo_codes_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 28,
                'migration' => '2021_09_21_093709_create_reviews_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 29,
                'migration' => '2021_09_21_093833_create_roles_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 30,
                'migration' => '2021_09_21_094020_create_services_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 31,
                'migration' => '2021_09_21_094413_create_shipping_services_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 32,
                'migration' => '2021_09_21_094517_create_sliders_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 33,
                'migration' => '2021_09_21_094630_create_socials_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 34,
                'migration' => '2021_09_21_094739_create_subcategories_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 35,
                'migration' => '2021_09_21_094831_create_subscribers_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 36,
                'migration' => '2021_09_21_094903_create_taxes_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 37,
                'migration' => '2021_09_21_095021_create_tickets_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 38,
                'migration' => '2021_09_21_095605_create_track_orders_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 39,
                'migration' => '2021_09_21_095650_create_transactions_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 40,
                'migration' => '2021_09_21_095836_create_wishlists_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 41,
                'migration' => '2021_09_21_091316_create_pages_table',
                'batch' => 2,
            ),
            40 => 
            array (
                'id' => 42,
                'migration' => '2021_09_22_095954_add_extra_visibility_to_settings_table',
                'batch' => 3,
            ),
            41 => 
            array (
                'id' => 43,
                'migration' => '2021_09_29_075836_add_theme_to_settings_table',
                'batch' => 4,
            ),
            42 => 
            array (
                'id' => 44,
                'migration' => '2021_09_30_103035_google_chapcha_to_settings__table',
                'batch' => 5,
            ),
            43 => 
            array (
                'id' => 45,
                'migration' => '2021_10_04_141643_add_currency_deraction_to_settings_table',
                'batch' => 6,
            ),
            44 => 
            array (
                'id' => 46,
                'migration' => '2021_10_08_135417_add_theme_field_to_sliders_table',
                'batch' => 7,
            ),
            45 => 
            array (
                'id' => 51,
                'migration' => '2021_10_09_153059_license_to_items_table',
                'batch' => 8,
            ),
            46 => 
            array (
                'id' => 56,
                'migration' => '2021_10_09_173004_remove_item_type_to_items_table',
                'batch' => 9,
            ),
            47 => 
            array (
                'id' => 57,
                'migration' => '2021_10_09_173038_set_item_type_to_items_table',
                'batch' => 9,
            ),
            48 => 
            array (
                'id' => 58,
                'migration' => '2021_10_10_051502_add_scrript_to_settings_table',
                'batch' => 10,
            ),
            49 => 
            array (
                'id' => 59,
                'migration' => '2021_10_10_142339_thumbnail_to_items_table',
                'batch' => 11,
            ),
            50 => 
            array (
                'id' => 61,
                'migration' => '2021_10_10_163455_home_page4_to_home_cutomizes_table',
                'batch' => 12,
            ),
            51 => 
            array (
                'id' => 62,
                'migration' => '2021_10_11_090243_create_extra_settings_table',
                'batch' => 13,
            ),
            52 => 
            array (
                'id' => 63,
                'migration' => '2021_10_12_145150_add_home4populer_category_to_home_cutomizes_table',
                'batch' => 14,
            ),
            53 => 
            array (
                'id' => 64,
                'migration' => '2021_10_13_100048_create_sitemaps_table',
                'batch' => 15,
            ),
            54 => 
            array (
                'id' => 65,
                'migration' => '2021_10_15_140708_add_type_to_promo_codes_table',
                'batch' => 16,
            ),
            55 => 
            array (
                'id' => 66,
                'migration' => '2021_10_15_163958_add_announcement_link_to_settings_table',
                'batch' => 17,
            ),
            56 => 
            array (
                'id' => 68,
                'migration' => '2021_11_21_143624_add_shop_extra_field_to_settings_table',
                'batch' => 19,
            ),
            57 => 
            array (
                'id' => 69,
                'migration' => '2021_11_20_105052_add_stock_to_attribute_options_table',
                'batch' => 20,
            ),
            58 => 
            array (
                'id' => 71,
                'migration' => '2021_11_21_151422_add_home_page_title_to_settings_table',
                'batch' => 21,
            ),
            59 => 
            array (
                'id' => 72,
                'migration' => '2021_11_23_141528_add_type_to_languages_table',
                'batch' => 22,
            ),
            60 => 
            array (
                'id' => 73,
                'migration' => '2021_11_23_144810_add_privacy_terms_to_settings_table',
                'batch' => 23,
            ),
            61 => 
            array (
                'id' => 74,
                'migration' => '2021_11_23_182026_add_guest_checkout_to_settings_table',
                'batch' => 24,
            ),
            62 => 
            array (
                'id' => 76,
                'migration' => '2021_11_24_144859_add_guest_hero_banner_to_home_cutomizes_table',
                'batch' => 25,
            ),
            63 => 
            array (
                'id' => 77,
                'migration' => '2021_11_26_163222_add_affiliate_link_to_items_table',
                'batch' => 26,
            ),
            64 => 
            array (
                'id' => 78,
                'migration' => '2021_11_27_113624_add_css_field_to_settings_table',
                'batch' => 27,
            ),
            65 => 
            array (
                'id' => 79,
                'migration' => '2021_12_05_161222_add_flash_section_to_extra_settings_table',
                'batch' => 28,
            ),
            66 => 
            array (
                'id' => 82,
                'migration' => '2021_12_05_165840_add_popup_field_to_settings_table',
                'batch' => 29,
            ),
            67 => 
            array (
                'id' => 83,
                'migration' => '2021_12_06_141255_add_3column_section_to_extra_settings_table',
                'batch' => 30,
            ),
            68 => 
            array (
                'id' => 84,
                'migration' => '2022_01_03_141239_add_currency_seperator_to_settings_table',
                'batch' => 31,
            ),
            69 => 
            array (
                'id' => 85,
                'migration' => '2022_01_04_142738_create_states_table',
                'batch' => 32,
            ),
            70 => 
            array (
                'id' => 86,
                'migration' => '2022_01_04_145532_add_state_id_to_users_table',
                'batch' => 33,
            ),
            71 => 
            array (
                'id' => 88,
                'migration' => '2022_01_04_161647_add_state_id_to_orders_table',
                'batch' => 34,
            ),
            72 => 
            array (
                'id' => 89,
                'migration' => '2022_01_06_155345_add_disqus_to_settings_table',
                'batch' => 35,
            ),
            73 => 
            array (
                'id' => 90,
                'migration' => '2022_01_16_143429_add_type_to_states_table',
                'batch' => 36,
            ),
            74 => 
            array (
                'id' => 91,
                'migration' => '2022_01_16_153254_add_state_to_orders_table',
                'batch' => 37,
            ),
            75 => 
            array (
                'id' => 92,
                'migration' => '2022_03_01_162121_add_is_decemial_to_settings_table',
                'batch' => 38,
            ),
            76 => 
            array (
                'id' => 93,
                'migration' => '2022_03_20_154807_update_column_to_home_cutomizes_table',
                'batch' => 39,
            ),
            77 => 
            array (
                'id' => 94,
                'migration' => '2023_10_10_151706_order_mail_settings_table',
                'batch' => 40,
            ),
            78 => 
            array (
                'id' => 95,
                'migration' => '2023_10_10_151706_ticket_mail_settings_table',
                'batch' => 40,
            ),
            79 => 
            array (
                'id' => 96,
                'migration' => '2024_08_19_152014_create_jobs_table',
                'batch' => 41,
            ),
            80 => 
            array (
                'id' => 97,
                'migration' => '2024_08_19_152355_add_category_enable_field_settings_table',
                'batch' => 41,
            ),
            81 => 
            array (
                'id' => 98,
                'migration' => '2024_08_19_152355_add_queue_settings_table',
                'batch' => 41,
            ),
            82 => 
            array (
                'id' => 99,
                'migration' => '2024_08_19_152355_add_working_field_settings_table',
                'batch' => 41,
            ),
            83 => 
            array (
                'id' => 100,
                'migration' => '2024_08_19_1672355_add_attribute_type_settings_table',
                'batch' => 41,
            ),
            84 => 
            array (
                'id' => 101,
                'migration' => '2024_08_19_1672355_add_email_verify_add_users_table',
                'batch' => 41,
            ),
            85 => 
            array (
                'id' => 102,
                'migration' => '2024_08_19_1672355_add_is_mail_verify_settings_table',
                'batch' => 41,
            ),
            86 => 
            array (
                'id' => 103,
                'migration' => '2024_08_19_1672355_add_is_single_checkout_settings_table',
                'batch' => 41,
            ),
            87 => 
            array (
                'id' => 104,
                'migration' => '2024_10_01_185249_create_menus_table',
                'batch' => 41,
            ),
            88 => 
            array (
                'id' => 105,
                'migration' => '2024_08_19_1672355_add_language_id_add_munes_table',
                'batch' => 42,
            ),
            89 => 
            array (
                'id' => 106,
                'migration' => '2024_08_19_1672355_add_language_id_add_munes_table',
                'batch' => 42,
            ),
            90 => 
            array (
                'id' => 107,
                'migration' => '2024_08_19_1672355_add_language_id_add_munes_table',
                'batch' => 42,
            ),
        ));
        
        
    }
}