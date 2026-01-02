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
            ),
        ));
        
        
    }
}