<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '01629552892',
                'photo' => 'OM_1763871787mNlXAJKO.png',
                'role_id' => 1,
                'password' => '$2y$10$sSOEgLz71CqkTogPNtBv6.g0fFNF8jsYuuqWNMcRwFtxEThctoBT.',
                'email_token' => NULL,
                'created_at' => '2018-03-01 05:27:08',
                'updated_at' => '2025-11-23 04:23:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'test',
                'email' => 'test@gmail.com',
                'phone' => '09000000',
                'photo' => 'BhTv1584160189Brooklyn99-310x310.jpg',
                'role_id' => 1,
                'password' => '$2y$10$cl6qNdVuAhzJyaaLACVxGOQhlYf7n/UgLrwW0vx9QDGlZyKGM97mm',
                'email_token' => NULL,
                'created_at' => '2021-12-05 16:24:50',
                'updated_at' => '2021-12-05 16:24:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'test',
                'email' => 'test2@gmail.com',
                'phone' => '09000000',
                'photo' => 'BhTv1584160189Brooklyn99-310x310.jpg',
                'role_id' => 1,
                'password' => '$2y$10$ULKlqy2RTu7hnHmjego8WODXhJs6y0IR3TB7upBXLl4xjpPfDYOdy',
                'email_token' => NULL,
                'created_at' => '2021-12-05 16:24:50',
                'updated_at' => '2021-12-05 16:24:50',
            ),
        ));
        
        
    }
}