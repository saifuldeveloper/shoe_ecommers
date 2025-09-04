<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Seed the admins table.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();

        \DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '01629552892',
                'photo' => '1631023655pexels-moose-photos-1036627.jpg',
                'role_id' => 1, // ✅ fixed: must exist in roles table
                'password' => '$2y$10$dleWnwZdislZalAL69.uLOuTtDGg9KX2nybDli45nj8GdXzHDVpYO',
                'email_token' => null,
                'created_at' => '2018-03-01 05:27:08',
                'updated_at' => '2021-12-04 11:04:55',
            ],
            [
                'id' => 2,
                'name' => 'test',
                'email' => 'test@gmail.com',
                'phone' => '09000000',
                'photo' => 'BhTv1584160189Brooklyn99-310x310.jpg',
                'role_id' => 1, // ✅ keep valid role_id
                'password' => '$2y$10$cl6qNdVuAhzJyaaLACVxGOQhlYf7n/UgLrwW0vx9QDGlZyKGM97mm',
                'email_token' => null,
                'created_at' => '2021-12-05 16:24:50',
                'updated_at' => '2021-12-05 16:24:50',
            ],
        ]);
    }
}
