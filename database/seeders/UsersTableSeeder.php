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
                'first_name' => 'Md',
                'last_name' => 'Antor',
                'phone' => '0123232323',
                'email' => 'mahfujurr751@gmail.com',
                'photo' => NULL,
                'email_token' => '931488',
                'password' => '$2y$10$woe5caSHwd7JUS9iQKrFheUMkHKCi7DV5R1LPe1Y2zoNP2iHHbkwi',
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
                'created_at' => '2025-12-09 15:59:45',
                'updated_at' => '2025-12-09 15:59:45',
            ),
        ));
        
        
    }
}