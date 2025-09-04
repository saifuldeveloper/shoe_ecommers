<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate table (delete all + reset auto-increment)
        DB::table('attributes')->truncate();

        // Insert records
        DB::table('attributes')->insert([
            [
                'id' => 2,
                'item_id' => 523,
                'name' => 'Color',
                'keyword' => 'color',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'item_id' => 524,
                'name' => 'Color',
                'keyword' => 'color',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'item_id' => 525,
                'name' => 'Color',
                'keyword' => 'color',
                'created_at' => null,
                'updated_at' => null,
            ],
            // 🔽 Continue with the rest of your array here
            // ...
            [
                'id' => 110,
                'item_id' => 587,
                'name' => 'test',
                'keyword' => 'test',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);

        // Enable foreign key checks again
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
