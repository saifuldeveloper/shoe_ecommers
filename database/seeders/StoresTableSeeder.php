<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stores')->delete();
        
          $stores = [
            ['district_id' => 1, 'name' => 'Dhaka Super Mart', 'slug' => Str::slug('Dhaka Super Mart'), 'area' => 'Dhanmondi', 'address' => 'House 12, Road 4, Dhanmondi, Dhaka', 'latitude' => 23.7471, 'longitude' => 90.3742, 'mobile' => '01711000001'],
            ['district_id' => 2, 'name' => 'Chittagong City Store', 'slug' => Str::slug('Chittagong City Store'), 'area' => 'Agrabad', 'address' => '36 Agrabad Commercial Area, Chittagong', 'latitude' => 22.3359, 'longitude' => 91.8327, 'mobile' => '01711000002'],
            ['district_id' => 3, 'name' => 'Khulna Mart', 'slug' => Str::slug('Khulna Mart'), 'area' => 'Sonadanga', 'address' => '23 Sonadanga Main Road, Khulna', 'latitude' => 22.8456, 'longitude' => 89.5403, 'mobile' => '01711000003'],
            ['district_id' => 4, 'name' => 'Rajshahi Center', 'slug' => Str::slug('Rajshahi Center'), 'area' => 'Shaheb Bazar', 'address' => '125 Shaheb Bazar, Rajshahi', 'latitude' => 24.3740, 'longitude' => 88.6010, 'mobile' => '01711000004'],
            ['district_id' => 5, 'name' => 'Barishal Point', 'slug' => Str::slug('Barishal Point'), 'area' => 'Nathullabad', 'address' => 'Nathullabad Bus Stand Area, Barishal', 'latitude' => 22.7010, 'longitude' => 90.3535, 'mobile' => '01711000005'],
            ['district_id' => 6, 'name' => 'Sylhet Mega Store', 'slug' => Str::slug('Sylhet Mega Store'), 'area' => 'Zindabazar', 'address' => 'Modina Market, Zindabazar, Sylhet', 'latitude' => 24.8949, 'longitude' => 91.8687, 'mobile' => '01711000006'],
            ['district_id' => 7, 'name' => 'Rangpur Outlet', 'slug' => Str::slug('Rangpur Outlet'), 'area' => 'Jahaj Company Mor', 'address' => 'Jahaj Company Mor, Rangpur City', 'latitude' => 25.7504, 'longitude' => 89.2513, 'mobile' => '01711000007'],
            ['district_id' => 8, 'name' => 'Mymensingh Superstore', 'slug' => Str::slug('Mymensingh Superstore'), 'area' => 'Ganginar Par', 'address' => 'Ganginar Par, Mymensingh', 'latitude' => 24.7471, 'longitude' => 90.4203, 'mobile' => '01711000008'],
            ['district_id' => 9, 'name' => 'Comilla Plaza', 'slug' => Str::slug('Comilla Plaza'), 'area' => 'Kandirpar', 'address' => 'Kandirpar, Comilla City', 'latitude' => 23.4619, 'longitude' => 91.1809, 'mobile' => '01711000009'],
            ['district_id' => 10, 'name' => 'Narayanganj Trade Center', 'slug' => Str::slug('Narayanganj Trade Center'), 'area' => 'Chashara', 'address' => 'Chashara, Narayanganj', 'latitude' => 23.6204, 'longitude' => 90.5003, 'mobile' => '01711000010'],
            ['district_id' => 11, 'name' => 'Gazipur Mega Mall', 'slug' => Str::slug('Gazipur Mega Mall'), 'area' => 'Tongi', 'address' => 'Tongi Bazar, Gazipur', 'latitude' => 23.8974, 'longitude' => 90.4029, 'mobile' => '01711000011'],
            ['district_id' => 12, 'name' => 'Jessore Corner', 'slug' => Str::slug('Jessore Corner'), 'area' => 'Ghop Area', 'address' => 'Ghop Area, Jessore', 'latitude' => 23.1707, 'longitude' => 89.2075, 'mobile' => '01711000012'],
            ['district_id' => 13, 'name' => 'Cox’s Bazar Store', 'slug' => Str::slug('Cox’s Bazar Store'), 'area' => 'Laboni Point', 'address' => 'Laboni Beach Road, Cox’s Bazar', 'latitude' => 21.4272, 'longitude' => 92.0058, 'mobile' => '01711000013'],
            ['district_id' => 14, 'name' => 'Pabna Center', 'slug' => Str::slug('Pabna Center'), 'area' => 'Edward College Road', 'address' => 'Edward College Road, Pabna', 'latitude' => 24.0064, 'longitude' => 89.2372, 'mobile' => '01711000014'],
            ['district_id' => 15, 'name' => 'Bogra Mart', 'slug' => Str::slug('Bogra Mart'), 'area' => 'Satmatha', 'address' => 'Satmatha, Bogra Town', 'latitude' => 24.8465, 'longitude' => 89.3770, 'mobile' => '01711000015'],
            ['district_id' => 16, 'name' => 'Faridpur Store', 'slug' => Str::slug('Faridpur Store'), 'area' => 'Goalchamat', 'address' => 'Goalchamat Road, Faridpur', 'latitude' => 23.6075, 'longitude' => 89.8425, 'mobile' => '01711000016'],
            ['district_id' => 17, 'name' => 'Kushtia Trade Hub', 'slug' => Str::slug('Kushtia Trade Hub'), 'area' => 'NS Road', 'address' => 'NS Road, Kushtia City', 'latitude' => 23.9013, 'longitude' => 89.1203, 'mobile' => '01711000017'],
            ['district_id' => 18, 'name' => 'Noakhali Super Mart', 'slug' => Str::slug('Noakhali Super Mart'), 'area' => 'Maijdee Court', 'address' => 'Maijdee Court Area, Noakhali', 'latitude' => 22.8240, 'longitude' => 91.0990, 'mobile' => '01711000018'],
            ['district_id' => 19, 'name' => 'Tangail City Store', 'slug' => Str::slug('Tangail City Store'), 'area' => 'VIP Road', 'address' => 'VIP Road, Tangail Sadar', 'latitude' => 24.2476, 'longitude' => 89.9167, 'mobile' => '01711000019'],
            ['district_id' => 20, 'name' => 'Sirajganj Market', 'slug' => Str::slug('Sirajganj Market'), 'area' => 'Rashid Bazar', 'address' => 'Rashid Bazar, Sirajganj', 'latitude' => 24.4500, 'longitude' => 89.7000, 'mobile' => '01711000020'],
        ];
        
        DB::table('stores')->insert($stores);

    }
}