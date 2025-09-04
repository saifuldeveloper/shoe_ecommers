<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Alex',
                'last_name' => 'Smith',
                'phone' => '01728332009',
                'email' => 'user@gmail.com',
                'photo' => '16385217454444.jpg',
                'email_token' => NULL,
                'password' => '$2y$10$o2LxRwxTmciQqlKzRhy9O./KERxB8Ht3K8.OHw3WGJu3oDuNQ/xXm',
                'ship_address1' => '472 Clark Street,  Bay Shore, New York',
                'ship_address2' => NULL,
                'ship_zip' => '3444',
                'ship_city' => 'New York',
                'ship_country' => 'United States',
                'ship_company' => NULL,
                'bill_address1' => '472 Clark Street,  Bay Shore, New York',
                'bill_address2' => NULL,
                'bill_zip' => '3444',
                'bill_city' => 'New York',
                'bill_country' => 'United States',
                'bill_company' => NULL,
                'created_at' => '2021-09-13 13:08:04',
                'updated_at' => '2025-04-13 21:25:57',
                'state_id' => 10,
                'email_verify' => 0,
            ),
            1 => 
            array (
                'id' => 8,
                'first_name' => 'showrav',
                'last_name' => 'Hasan',
                'phone' => '017286436',
                'email' => 'teacher@gmail.com',
                'photo' => NULL,
                'email_token' => 'ckKvuX',
                'password' => '$2y$10$zTzmhxGC02sxXgxdp2fDuOaQwKOg.DeHDK3zLDXRSsx1C.T8XX9j.',
                'ship_address1' => NULL,
                'ship_address2' => NULL,
                'ship_zip' => NULL,
                'ship_city' => NULL,
                'ship_country' => NULL,
                'ship_company' => NULL,
                'bill_address1' => NULL,
                'bill_address2' => NULL,
                'bill_zip' => NULL,
                'bill_city' => NULL,
                'bill_country' => NULL,
                'bill_company' => NULL,
                'created_at' => '2022-03-19 16:10:00',
                'updated_at' => '2022-03-19 16:10:00',
                'state_id' => NULL,
                'email_verify' => 0,
            ),
            2 => 
            array (
                'id' => 9,
                'first_name' => 'Mamunur',
                'last_name' => 'Rashid',
                'phone' => '01795846424',
                'email' => 'mamunurrashid6424@gmail.com',
                'photo' => NULL,
                'email_token' => '762208',
                'password' => '$2y$10$H6yB.Vx7auhkEOiIMMZw6O0in5l4GsMCMetXJRIDoWUEV/e8NUUAK',
                'ship_address1' => NULL,
                'ship_address2' => NULL,
                'ship_zip' => NULL,
                'ship_city' => NULL,
                'ship_country' => NULL,
                'ship_company' => NULL,
                'bill_address1' => NULL,
                'bill_address2' => NULL,
                'bill_zip' => NULL,
                'bill_city' => NULL,
                'bill_country' => NULL,
                'bill_company' => NULL,
                'created_at' => '2025-04-12 17:58:21',
                'updated_at' => '2025-04-12 17:58:21',
                'state_id' => NULL,
                'email_verify' => 0,
            ),
            3 => 
            array (
                'id' => 10,
                'first_name' => 'Mamunur',
                'last_name' => 'Rashid',
                'phone' => '01795846424',
                'email' => 'mamunurrashid6424@gmail.com',
                'photo' => NULL,
                'email_token' => '696087',
                'password' => '$2y$10$EKvnwgmYH6WVQFaHSYWNmOWHkFPzqyKinJq62YXR7DA//C1AqKFIq',
                'ship_address1' => NULL,
                'ship_address2' => NULL,
                'ship_zip' => NULL,
                'ship_city' => NULL,
                'ship_country' => NULL,
                'ship_company' => NULL,
                'bill_address1' => NULL,
                'bill_address2' => NULL,
                'bill_zip' => NULL,
                'bill_city' => NULL,
                'bill_country' => NULL,
                'bill_company' => NULL,
                'created_at' => '2025-04-12 18:02:04',
                'updated_at' => '2025-04-12 18:02:04',
                'state_id' => NULL,
                'email_verify' => 0,
            ),
        ));
        
        
    }
}