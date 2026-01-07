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
                'first_name' => 'saiful',
                'last_name' => 'islam',
                'phone' => '01518987898',
                'email' => 'saiful@gmail.com',
                'photo' => NULL,
                'email_token' => '498f54cedcd66445ef2e85663ad19a52',
                'password' => '$2y$10$0QNobX57K3bzr6.HViNsR.0UCL/ueDww1sBmFxEee.6NwKuEBr15O',
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
                'deleted_at' => NULL,
                'created_at' => '2026-01-07 04:00:40',
                'updated_at' => '2026-01-07 05:11:20',
                'reward_point' => NULL,
            ),
        ));
        
        
    }
}