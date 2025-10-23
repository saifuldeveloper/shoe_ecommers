<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();

         $districts = [
            ['name' => 'Dhaka', 'slug' => Str::slug('Dhaka')],
            ['name' => 'Chittagong', 'slug' => Str::slug('Chittagong')],
            ['name' => 'Khulna', 'slug' => Str::slug('Khulna')],
            ['name' => 'Rajshahi', 'slug' => Str::slug('Rajshahi')],
            ['name' => 'Barishal', 'slug' => Str::slug('Barishal')],
            ['name' => 'Sylhet', 'slug' => Str::slug('Sylhet')],
            ['name' => 'Rangpur', 'slug' => Str::slug('Rangpur')],
            ['name' => 'Mymensingh', 'slug' => Str::slug('Mymensingh')],
            ['name' => 'Comilla', 'slug' => Str::slug('Comilla')],
            ['name' => 'Narayanganj', 'slug' => Str::slug('Narayanganj')],
            ['name' => 'Gazipur', 'slug' => Str::slug('Gazipur')],
            ['name' => 'Jessore', 'slug' => Str::slug('Jessore')],
            ['name' => 'Cox’s Bazar', 'slug' => Str::slug('Cox’s Bazar')],
            ['name' => 'Pabna', 'slug' => Str::slug('Pabna')],
            ['name' => 'Bogra', 'slug' => Str::slug('Bogra')],
            ['name' => 'Faridpur', 'slug' => Str::slug('Faridpur')],
            ['name' => 'Kushtia', 'slug' => Str::slug('Kushtia')],
            ['name' => 'Noakhali', 'slug' => Str::slug('Noakhali')],
            ['name' => 'Tangail', 'slug' => Str::slug('Tangail')],
            ['name' => 'Sirajganj', 'slug' => Str::slug('Sirajganj')],
            ['name' => 'Narsingdi', 'slug' => Str::slug('Narsingdi')],
            ['name' => 'Jamalpur', 'slug' => Str::slug('Jamalpur')],
            ['name' => 'Dinajpur', 'slug' => Str::slug('Dinajpur')],
            ['name' => 'Manikganj', 'slug' => Str::slug('Manikganj')],
            ['name' => 'Chuadanga', 'slug' => Str::slug('Chuadanga')],
        ];

         DB::table('districts')->insert($districts);   
    }
}