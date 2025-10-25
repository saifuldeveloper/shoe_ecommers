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
            ['id' => 1, 'name' => 'Bagerhat', 'slug' => Str::slug('Bagerhat')],
            ['id' => 2, 'name' => 'Bandarban', 'slug' => Str::slug('Bandarban')],
            ['id' => 3, 'name' => 'Barguna', 'slug' => Str::slug('Barguna')],
            ['id' => 4, 'name' => 'Barishal', 'slug' => Str::slug('Barishal')],
            ['id' => 5, 'name' => 'Bhola', 'slug' => Str::slug('Bhola')],
            ['id' => 6, 'name' => 'Bogra', 'slug' => Str::slug('Bogra')],
            ['id' => 7, 'name' => 'Brahmanbaria', 'slug' => Str::slug('Brahmanbaria')],
            ['id' => 8, 'name' => 'Chandpur', 'slug' => Str::slug('Chandpur')],
            ['id' => 9, 'name' => 'Chapai Nawabganj', 'slug' => Str::slug('Chapai Nawabganj')],
            ['id' => 10, 'name' => 'Chattogram', 'slug' => Str::slug('Chattogram')],
            ['id' => 11, 'name' => 'Chuadanga', 'slug' => Str::slug('Chuadanga')],
            ['id' => 12, 'name' => 'Comilla', 'slug' => Str::slug('Comilla')],
            ['id' => 13, 'name' => 'Cox’s Bazar', 'slug' => Str::slug('Cox’s Bazar')],
            ['id' => 14, 'name' => 'Dhaka', 'slug' => Str::slug('Dhaka')],
            ['id' => 15, 'name' => 'Dinajpur', 'slug' => Str::slug('Dinajpur')],
            ['id' => 16, 'name' => 'Faridpur', 'slug' => Str::slug('Faridpur')],
            ['id' => 17, 'name' => 'Feni', 'slug' => Str::slug('Feni')],
            ['id' => 18, 'name' => 'Gaibandha', 'slug' => Str::slug('Gaibandha')],
            ['id' => 19, 'name' => 'Gazipur', 'slug' => Str::slug('Gazipur')],
            ['id' => 20, 'name' => 'Gopalganj', 'slug' => Str::slug('Gopalganj')],
            ['id' => 21, 'name' => 'Habiganj', 'slug' => Str::slug('Habiganj')],
            ['id' => 22, 'name' => 'Jamalpur', 'slug' => Str::slug('Jamalpur')],
            ['id' => 23, 'name' => 'Jessore', 'slug' => Str::slug('Jessore')],
            ['id' => 24, 'name' => 'Jhalokathi', 'slug' => Str::slug('Jhalokathi')],
            ['id' => 25, 'name' => 'Jhenaidah', 'slug' => Str::slug('Jhenaidah')],
            ['id' => 26, 'name' => 'Joypurhat', 'slug' => Str::slug('Joypurhat')],
            ['id' => 27, 'name' => 'Khagrachhari', 'slug' => Str::slug('Khagrachhari')],
            ['id' => 28, 'name' => 'Khulna', 'slug' => Str::slug('Khulna')],
            ['id' => 29, 'name' => 'Kishoreganj', 'slug' => Str::slug('Kishoreganj')],
            ['id' => 30, 'name' => 'Kurigram', 'slug' => Str::slug('Kurigram')],
            ['id' => 31, 'name' => 'Kushtia', 'slug' => Str::slug('Kushtia')],
            ['id' => 32, 'name' => 'Lakshmipur', 'slug' => Str::slug('Lakshmipur')],
            ['id' => 33, 'name' => 'Lalmonirhat', 'slug' => Str::slug('Lalmonirhat')],
            ['id' => 34, 'name' => 'Madaripur', 'slug' => Str::slug('Madaripur')],
            ['id' => 35, 'name' => 'Magura', 'slug' => Str::slug('Magura')],
            ['id' => 36, 'name' => 'Manikganj', 'slug' => Str::slug('Manikganj')],
            ['id' => 37, 'name' => 'Meherpur', 'slug' => Str::slug('Meherpur')],
            ['id' => 38, 'name' => 'Moulvibazar', 'slug' => Str::slug('Moulvibazar')],
            ['id' => 39, 'name' => 'Munshiganj', 'slug' => Str::slug('Munshiganj')],
            ['id' => 40, 'name' => 'Mymensingh', 'slug' => Str::slug('Mymensingh')],
            ['id' => 41, 'name' => 'Naogaon', 'slug' => Str::slug('Naogaon')],
            ['id' => 42, 'name' => 'Narail', 'slug' => Str::slug('Narail')],
            ['id' => 43, 'name' => 'Narayanganj', 'slug' => Str::slug('Narayanganj')],
            ['id' => 44, 'name' => 'Narsingdi', 'slug' => Str::slug('Narsingdi')],
            ['id' => 45, 'name' => 'Natore', 'slug' => Str::slug('Natore')],
            ['id' => 46, 'name' => 'Nawabganj', 'slug' => Str::slug('Nawabganj')],
            ['id' => 47, 'name' => 'Netrakona', 'slug' => Str::slug('Netrakona')],
            ['id' => 48, 'name' => 'Nilphamari', 'slug' => Str::slug('Nilphamari')],
            ['id' => 49, 'name' => 'Noakhali', 'slug' => Str::slug('Noakhali')],
            ['id' => 50, 'name' => 'Pabna', 'slug' => Str::slug('Pabna')],
            ['id' => 51, 'name' => 'Panchagarh', 'slug' => Str::slug('Panchagarh')],
            ['id' => 52, 'name' => 'Patuakhali', 'slug' => Str::slug('Patuakhali')],
            ['id' => 53, 'name' => 'Pirojpur', 'slug' => Str::slug('Pirojpur')],
            ['id' => 54, 'name' => 'Rajbari', 'slug' => Str::slug('Rajbari')],
            ['id' => 55, 'name' => 'Rajshahi', 'slug' => Str::slug('Rajshahi')],
            ['id' => 56, 'name' => 'Rangamati', 'slug' => Str::slug('Rangamati')],
            ['id' => 57, 'name' => 'Rangpur', 'slug' => Str::slug('Rangpur')],
            ['id' => 58, 'name' => 'Satkhira', 'slug' => Str::slug('Satkhira')],
            ['id' => 59, 'name' => 'Shariatpur', 'slug' => Str::slug('Shariatpur')],
            ['id' => 60, 'name' => 'Sherpur', 'slug' => Str::slug('Sherpur')],
            ['id' => 61, 'name' => 'Sirajganj', 'slug' => Str::slug('Sirajganj')],
            ['id' => 62, 'name' => 'Sunamganj', 'slug' => Str::slug('Sunamganj')],
            ['id' => 63, 'name' => 'Sylhet', 'slug' => Str::slug('Sylhet')],
            ['id' => 64, 'name' => 'Tangail', 'slug' => Str::slug('Tangail')],
        ];


        DB::table('districts')->insert($districts);
    }
}