<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'test',
                'section' => '["Manage Categories","Manage Products","Manage Orders","Transactions","Ecommerce","Customer List","Manages Tickets","Manage Site","Manage Faqs Contents","Manage Blogs","Manages Pages","Subscribers List","Manage System User"]',
                'created_at' => '2021-12-05 16:24:27',
                'updated_at' => '2021-12-05 16:24:27',
            ),
        ));
        
        
    }
}