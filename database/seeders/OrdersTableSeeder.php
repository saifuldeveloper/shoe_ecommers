<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'session_id' => NULL,
                'cart' => '[{"id":2,"user_id":null,"session_id":"e17a2dc2dd67d10cdf08dab51e10a301","item_id":13,"quantity":1,"item_variant_id":null,"created_at":"2025-11-29T06:51:41.000000Z","updated_at":"2025-11-29T06:51:41.000000Z","item":{"id":13,"category_id":2,"subcategory_id":null,"childcategory_id":null,"tax_id":3,"brand_id":1,"name":"shoes","slug":"shoes","sku":"1212","code":null,"tags":"antor,mahfujur,shoes,juta","photo":"OM_1764398403tEUOBCUL.jpg","thumbnail":"OM_1764398403J5kyh2TC.jpg","video":"https:\\/\\/www.youtube.com\\/watch?v=wyKAsqzyA5Q","file":null,"file_type":null,"link":null,"sort_details":"cdsdsd","details":"\\u003Cp\\u003Efderer\\u003C\\/p\\u003E","specification_name":null,"specification_description":null,"is_specification":0,"discount_price":1212,"previous_price":1313,"stock":0,"license_name":null,"license_key":null,"item_type":"normal","affiliate_link":null,"meta_keywords":"antor,mahfujur,shoes,juta","meta_description":"drfere","is_variant":1,"variant_option":"[\\"Color\\",\\"Size\\"]","variant_value":"[\\"Blue\\",\\"Black\\",\\"Red\\",\\"44\\",\\"43\\",\\"42\\",\\"41\\",\\"40\\",\\"39\\"]","status":1,"date":null,"is_type":"new","created_at":"2025-11-29T06:40:03.000000Z","updated_at":"2025-11-29T06:40:03.000000Z"}}]',
                'currency_sign' => '৳',
                'currency_value' => '1.0000',
                'discount' => '0.00',
                'shipping' => '0.00',
                'payment_method' => 'Cash On Delivery',
                'txnid' => NULL,
                'tax' => '0.00',
                'charge_id' => NULL,
                'transaction_number' => 'ORD-20251129-1',
                'order_status' => 'Delivered',
                'shipping_info' => '{"ship_name":"required","ship_phone":"required","ship_email":"nullable|email","ship_city":"nullable","ship_address1":"required"}',
                'billing_info' => '{"_token":"vb6CvqNeFcBoXC9pImIviyVAQxMJBIqsOzlf3l20","size":null,"payment_method":"cod","ship_country":"Bangladesh","ship_name":"antor","ship_email":"avijatryshoes@gmail.com","ship_city":"dhaka","ship_zip":"1212","ship_phone":"01926271512","ship_address1":"dhaka narayanganj","shipping_charge":"0.00"}',
                'payment_status' => 'Paid',
                'state_price' => '1212.00',
                'state' => NULL,
                'created_at' => '2025-11-29 12:57:34',
                'updated_at' => '2025-11-29 13:03:21',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'is_reward_point_used' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'session_id' => NULL,
                'cart' => '[]',
                'currency_sign' => '৳',
                'currency_value' => '1.0000',
                'discount' => '0.00',
                'shipping' => '0.00',
                'payment_method' => 'Cash On Delivery',
                'txnid' => NULL,
                'tax' => '0.00',
                'charge_id' => NULL,
                'transaction_number' => 'ORD-20251209-2',
                'order_status' => 'Pending',
                'shipping_info' => '{"ship_name":"required","ship_phone":"required","ship_email":"nullable|email","ship_city":"nullable","ship_address1":"required"}',
                'billing_info' => '{"_token":"9CfJNIKvqTrFWXgmFz9ieJ82d1xWWxosl2bvKSKF","size":null,"payment_method":"cod","ship_country":"Bangladesh","ship_name":"dfeoi","ship_email":"mahfujurr751@gmail.com","ship_city":"fefe","ship_zip":"derfer","ship_phone":"0123232323","ship_address1":"defef","shipping_charge":"0.00"}',
                'payment_status' => 'Unpaid',
                'state_price' => '0.00',
                'state' => NULL,
                'created_at' => '2025-12-09 16:23:04',
                'updated_at' => '2025-12-09 16:23:04',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'is_reward_point_used' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'session_id' => NULL,
            'cart' => '[{"id":4,"user_id":1,"session_id":null,"item_id":10,"quantity":1,"item_variant_id":null,"created_at":"2025-12-09T10:30:52.000000Z","updated_at":"2025-12-09T10:30:52.000000Z","item":{"id":10,"category_id":1,"subcategory_id":2,"childcategory_id":null,"tax_id":3,"brand_id":1,"name":"Under Armour HOVR Phantom 3","slug":"under-armour-hovr-phantom-3","sku":"SKU1010","code":null,"tags":null,"photo":"5208169_1_1024x1024 (1).webp","thumbnail":"5208169_1_1024x1024 (1).webp","video":null,"file":null,"file_type":null,"link":null,"sort_details":"","details":null,"specification_name":null,"specification_description":null,"is_specification":0,"discount_price":140,"previous_price":170,"stock":8,"license_name":null,"license_key":null,"item_type":"normal","affiliate_link":null,"meta_keywords":null,"meta_description":null,"is_variant":null,"variant_option":null,"variant_value":null,"status":1,"date":null,"is_type":"new","created_at":"2025-10-14T05:54:53.000000Z","updated_at":"2025-10-14T05:54:53.000000Z"}}]',
                'currency_sign' => '৳',
                'currency_value' => '1.0000',
                'discount' => '0.00',
                'shipping' => '0.00',
                'payment_method' => 'Cash On Delivery',
                'txnid' => NULL,
                'tax' => '0.00',
                'charge_id' => NULL,
                'transaction_number' => 'ORD-20251209-3',
                'order_status' => 'Pending',
                'shipping_info' => '{"ship_name":"required","ship_phone":"required","ship_email":"nullable|email","ship_city":"nullable","ship_address1":"required"}',
                'billing_info' => '{"_token":"9CfJNIKvqTrFWXgmFz9ieJ82d1xWWxosl2bvKSKF","size":null,"payment_method":"cod","ship_country":"Bangladesh","ship_name":"sd","ship_email":"mahfujurr751@gmail.com","ship_city":"sda","ship_zip":null,"ship_phone":"0123232323","ship_address1":"ADa","shipping_charge":"0.00"}',
                'payment_status' => 'Unpaid',
                'state_price' => '140.00',
                'state' => NULL,
                'created_at' => '2025-12-09 16:31:46',
                'updated_at' => '2025-12-09 16:31:46',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'is_reward_point_used' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'session_id' => NULL,
                'cart' => '[{"id":5,"user_id":null,"session_id":"1f920e1ef968f583465947dcf73165c2","item_id":2,"quantity":1,"item_variant_id":null,"created_at":"2025-12-11T15:37:11.000000Z","updated_at":"2025-12-11T15:37:11.000000Z","item":{"id":2,"category_id":1,"subcategory_id":2,"childcategory_id":null,"tax_id":3,"brand_id":1,"name":"Adidas Ultraboost Light","slug":"adidas-ultraboost-light","sku":"SKU1002","code":null,"tags":null,"photo":"1_57131a00-ccac-44f0-b935-80131c0fb14b_1024x1024.webp","thumbnail":"1_57131a00-ccac-44f0-b935-80131c0fb14b_1024x1024.webp","video":null,"file":null,"file_type":null,"link":null,"sort_details":"","details":null,"specification_name":null,"specification_description":null,"is_specification":0,"discount_price":130,"previous_price":160,"stock":15,"license_name":null,"license_key":null,"item_type":"normal","affiliate_link":null,"meta_keywords":null,"meta_description":null,"is_variant":null,"variant_option":null,"variant_value":null,"status":1,"date":null,"is_type":"feature","created_at":"2025-10-14T05:54:53.000000Z","updated_at":"2025-10-14T05:54:53.000000Z"}}]',
                'currency_sign' => '৳',
                'currency_value' => '1.0000',
                'discount' => '0.00',
                'shipping' => '0.00',
                'payment_method' => 'Cash On Delivery',
                'txnid' => NULL,
                'tax' => '0.00',
                'charge_id' => NULL,
                'transaction_number' => 'ORD-20251211-4',
                'order_status' => 'Pending',
                'shipping_info' => '{"ship_name":"required","ship_phone":"required","ship_email":"nullable|email","ship_city":"nullable","ship_address1":"required"}',
                'billing_info' => '{"_token":"aQyNMUHhY3mR670GkEVpvje78dyUhMwgBayX2ERS","size":null,"payment_method":"cod","ship_country":"Bangladesh","ship_name":"Alamin islam","ship_email":"alamincsetpi@gmail.com","ship_city":"Mirpur-12","ship_zip":"1216","ship_phone":"01738022592","ship_address1":"Dhaka\\r\\nDhakta","shipping_charge":"0.00"}',
                'payment_status' => 'Unpaid',
                'state_price' => '130.00',
                'state' => NULL,
                'created_at' => '2025-12-11 21:37:26',
                'updated_at' => '2025-12-11 21:37:26',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'is_reward_point_used' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'session_id' => NULL,
            'cart' => '[{"id":2,"user_id":null,"session_id":"b75a808fd596e16eddf19c21b48b67d1","item_id":17,"quantity":1,"item_variant_id":null,"created_at":"2026-01-07T05:09:32.000000Z","updated_at":"2026-01-07T05:09:32.000000Z","item":{"id":17,"category_id":2,"subcategory_id":null,"childcategory_id":null,"tax_id":3,"brand_id":1,"name":"COMFIT FAY LADIES COMFIT LADIES CLOSED","slug":"comfit-fay-ladies-comfit-ladies-closed","sku":"A-4114","code":null,"tags":"COMFIT FAY LADIES COMFIT LADIES CLOSED","photo":"OM_1767756183vO3RYx9N.avif","thumbnail":"OM_1767756183vO3RYx9N.avif","video":null,"file":null,"file_type":null,"link":null,"sort_details":"COMFIT FAY LADIES COMFIT LADIES CLOSED","details":"\\u003Ch1 class=\\"product-title\\" style=\\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; font-family: Arimo, sans-serif; font-weight: 700; line-height: 32px; font-size: 20px; padding: 0px; text-transform: capitalize; overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 2; -webkit-box-orient: vertical; color: rgb(0, 0, 0) !important;\\"\\u003E\\u003Cspan style=\\"font-family: Montserrat-Regular;\\"\\u003ECOMFIT FAY LADIES COMFIT LADIES CLOSED\\u003C\\/span\\u003E\\u003C\\/h1\\u003E","specification_name":"[null]","specification_description":"[null]","is_specification":1,"discount_price":500,"previous_price":400,"stock":0,"license_name":null,"license_key":null,"item_type":"normal","affiliate_link":null,"meta_keywords":"COMFIT FAY LADIES COMFIT LADIES CLOSED","meta_description":"COMFIT FAY LADIES COMFIT LADIES CLOSED","is_variant":1,"variant_option":"[\\"Color\\",\\"Size\\"]","variant_value":"[\\"Black\\",\\"43\\",\\"40\\"]","status":1,"date":null,"is_type":"feature","created_at":"2026-01-07T03:23:03.000000Z","updated_at":"2026-01-07T03:23:03.000000Z","deleted_at":null,"deleted_by":null}},{"id":3,"user_id":null,"session_id":"b75a808fd596e16eddf19c21b48b67d1","item_id":18,"quantity":1,"item_variant_id":null,"created_at":"2026-01-07T05:15:21.000000Z","updated_at":"2026-01-07T05:15:21.000000Z","item":{"id":18,"category_id":2,"subcategory_id":null,"childcategory_id":null,"tax_id":2,"brand_id":1,"name":"LADIES Shoe","slug":"ladies-shoe","sku":"A-4188","code":null,"tags":"","photo":"OM_1767756278lkfFOywn.avif","thumbnail":"OM_1767756278lkfFOywn.avif","video":null,"file":null,"file_type":null,"link":null,"sort_details":"Banck\\/45\\/55","details":"\\u003Cp\\u003EBanck\\/45\\/55\\u003C\\/p\\u003E","specification_name":"[null]","specification_description":"[null]","is_specification":1,"discount_price":600,"previous_price":500,"stock":0,"license_name":null,"license_key":null,"item_type":"normal","affiliate_link":null,"meta_keywords":"Banck\\/45\\/55","meta_description":"Banck\\/45\\/55","is_variant":1,"variant_option":"[\\"Color\\",\\"Size\\"]","variant_value":"[\\"Black\\",\\"43\\",\\"39\\"]","status":1,"date":null,"is_type":"feature","created_at":"2026-01-07T03:24:38.000000Z","updated_at":"2026-01-07T03:24:38.000000Z","deleted_at":null,"deleted_by":null}}]',
                'currency_sign' => '৳',
                'currency_value' => '1.0000',
                'discount' => '0.00',
                'shipping' => '0.00',
                'payment_method' => 'Cash On Delivery',
                'txnid' => NULL,
                'tax' => '0.00',
                'charge_id' => NULL,
                'transaction_number' => 'ORD-20260107-5',
                'order_status' => 'Pending',
                'shipping_info' => '{"ship_name":"required","ship_phone":"required","ship_email":"nullable|email","ship_city":"nullable","ship_address1":"required"}',
                'billing_info' => '{"_token":"SKBpJyLFcFDg12vtapMfZip9hPodMoIwmnExuXR5","size":null,"payment_method":"cod","cat_total":"\\u09f31,100.00","order_id":"\\u09f31,100.00","ship_country":"Bangladesh","ship_name":"mdsaiful","ship_email":"mdsaiful@gmail.com","ship_city":"asdf","ship_zip":"asdf","ship_phone":"asdf","ship_address1":"asdf","shipping_charge":"0.00"}',
                'payment_status' => 'Unpaid',
                'state_price' => '1100.00',
                'state' => NULL,
                'created_at' => '2026-01-07 05:15:35',
                'updated_at' => '2026-01-07 05:15:35',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'is_reward_point_used' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'session_id' => NULL,
                'cart' => '[{"id":5,"user_id":null,"session_id":"b75a808fd596e16eddf19c21b48b67d1","item_id":3,"quantity":1,"item_variant_id":null,"created_at":"2026-01-07T08:08:31.000000Z","updated_at":"2026-01-07T08:08:31.000000Z","item":{"id":3,"category_id":1,"subcategory_id":2,"childcategory_id":null,"tax_id":3,"brand_id":1,"name":"Puma RS-X Reinvent","slug":"puma-rs-x-reinvent","sku":"SKU1003","code":null,"tags":null,"photo":"1_4870127f-7197-4881-a5dc-5d4354ed941d_1024x1024.webp","thumbnail":"1_4870127f-7197-4881-a5dc-5d4354ed941d_1024x1024.webp","video":null,"file":null,"file_type":null,"link":null,"sort_details":"","details":null,"specification_name":null,"specification_description":null,"is_specification":0,"discount_price":140,"previous_price":170,"stock":8,"license_name":null,"license_key":null,"item_type":"normal","affiliate_link":null,"meta_keywords":null,"meta_description":null,"is_variant":null,"variant_option":null,"variant_value":null,"status":1,"date":null,"is_type":"feature","created_at":"2025-10-14T11:54:53.000000Z","updated_at":"2025-10-14T11:54:53.000000Z","deleted_at":null,"deleted_by":null}}]',
                'currency_sign' => '৳',
                'currency_value' => '1.0000',
                'discount' => '0.00',
                'shipping' => '0.00',
                'payment_method' => 'Cash On Delivery',
                'txnid' => NULL,
                'tax' => '0.00',
                'charge_id' => NULL,
                'transaction_number' => 'ORD-20260107-6',
                'order_status' => 'Pending',
                'shipping_info' => '{"ship_name":"required","ship_phone":"required","ship_email":"nullable|email","ship_city":"nullable","ship_address1":"required"}',
            'billing_info' => '{"_token":"SKBpJyLFcFDg12vtapMfZip9hPodMoIwmnExuXR5","size":null,"payment_method":"cod","cat_total":"\\u09f3140.00","order_id":"\\u09f3140.00","ship_country":"Bangladesh","ship_name":"Kyra Bradshaw","ship_email":"boqybarexa@mailinator.com","ship_city":"Ea maiores reprehend","ship_zip":"10033","ship_phone":"+1 (833) 782-8506","ship_address1":"470 West Hague Parkway","shipping_charge":"0"}',
                'payment_status' => 'Unpaid',
                'state_price' => '140.00',
                'state' => NULL,
                'created_at' => '2026-01-07 08:09:14',
                'updated_at' => '2026-01-07 08:09:14',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'is_reward_point_used' => 0,
            ),
        ));
        
        
    }
}