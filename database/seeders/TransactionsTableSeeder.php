<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 90,
                'order_id' => '122',
                'txn_id' => 'zNF5gDbPnM',
                'amount' => 161.0,
                'user_email' => 'teacher@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 15:37:45',
                'updated_at' => '2022-01-16 15:37:45',
            ),
            1 => 
            array (
                'id' => 91,
                'order_id' => '123',
                'txn_id' => 'ZN6ve2FsBf',
                'amount' => 383.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 16:00:15',
                'updated_at' => '2022-01-16 16:00:15',
            ),
            2 => 
            array (
                'id' => 92,
                'order_id' => '124',
                'txn_id' => 'GPt4RZ0RCq',
                'amount' => 77.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 16:03:35',
                'updated_at' => '2022-01-16 16:03:35',
            ),
            3 => 
            array (
                'id' => 93,
                'order_id' => '125',
                'txn_id' => '0HGakDhxlW',
                'amount' => 97.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 16:08:36',
                'updated_at' => '2022-01-16 16:08:36',
            ),
            4 => 
            array (
                'id' => 94,
                'order_id' => '126',
                'txn_id' => 'Ffr4zOVXnf',
                'amount' => 791.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 17:31:41',
                'updated_at' => '2022-01-16 17:31:41',
            ),
            5 => 
            array (
                'id' => 95,
                'order_id' => '127',
                'txn_id' => 'rTgJph3cv8',
                'amount' => 408.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 17:33:57',
                'updated_at' => '2022-01-16 17:33:57',
            ),
            6 => 
            array (
                'id' => 96,
                'order_id' => '128',
                'txn_id' => 'JrV7oupswB',
                'amount' => 176.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 17:36:51',
                'updated_at' => '2022-01-16 17:36:51',
            ),
            7 => 
            array (
                'id' => 97,
                'order_id' => '129',
                'txn_id' => 'HhgjzEg09z',
                'amount' => 1513.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-01-16 17:40:48',
                'updated_at' => '2022-01-16 17:40:48',
            ),
            8 => 
            array (
                'id' => 98,
                'order_id' => '130',
                'txn_id' => 'j0W5sAeolz',
                'amount' => 172.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-03-01 16:10:39',
                'updated_at' => '2022-03-01 16:10:39',
            ),
            9 => 
            array (
                'id' => 99,
                'order_id' => '131',
                'txn_id' => 'TyExwhsbeS',
                'amount' => 1725.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-03-02 08:15:49',
                'updated_at' => '2022-03-02 08:15:49',
            ),
            10 => 
            array (
                'id' => 100,
                'order_id' => '132',
                'txn_id' => 'w10xGWiN80',
                'amount' => 55.0,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2022-03-02 08:18:08',
                'updated_at' => '2022-03-02 08:18:08',
            ),
            11 => 
            array (
                'id' => 101,
                'order_id' => '133',
                'txn_id' => 'ORD-20250413-133',
                'amount' => 1458.11,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2025-04-13 21:53:01',
                'updated_at' => '2025-04-13 21:53:01',
            ),
            12 => 
            array (
                'id' => 102,
                'order_id' => '134',
                'txn_id' => 'ORD-20250427-134',
                'amount' => 655.75,
                'user_email' => 'mamunurrashid6424@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2025-04-27 20:05:39',
                'updated_at' => '2025-04-27 20:05:39',
            ),
            13 => 
            array (
                'id' => 103,
                'order_id' => '135',
                'txn_id' => 'ORD-20250427-135',
                'amount' => 655.75,
                'user_email' => 'user@gmail.com',
                'currency_sign' => '$',
                'currency_value' => 1.0,
                'created_at' => '2025-04-27 20:06:24',
                'updated_at' => '2025-04-27 20:06:24',
            ),
        ));
        
        
    }
}