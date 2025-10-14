<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the table before seeding (or use delete() as you did)
        DB::table('variants')->delete();

        $colors = [1, 2];
        $sizes = range(1, 6);
        $variantsToCreate = [];
        $now = now(); 

        foreach ($colors as $colorId) {
            foreach ($sizes as $sizeId) {
                $colorName = $colorId === 1 ? 'Red' : 'Black';
                $sizeName = $sizeId; 

                $variantsToCreate[] = [
                    'name'       => "{$colorName}/{$sizeName}",
                    'color_id'   => $colorId,
                    'size_id'    => $sizeId,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
        }
        $variantsToCreate[] = [
            'name'       => 'Blue/4',
            'color_id'   => 3,
            'size_id'    => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        $variantsToCreate[] = [
            'name'       => 'Blue/5',
            'color_id'   => 3,
            'size_id'    => 5,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        $variantsToCreate[] = [
            'name'       => 'Blue/6',
            'color_id'   => 3,
            'size_id'    => 6,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        // Insert all 15 variants at once
        DB::table('variants')->insert($variantsToCreate);
    }
}