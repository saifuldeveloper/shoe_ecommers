<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        
        \DB::table('stores')->insert(array (
            0 => 
            array (
                'id' => 41,
                'district_id' => 1,
                'name' => 'Dhaka Super Mart',
                'slug' => 'dhaka-super-mart',
                'area' => 'Dhanmondi',
                'address' => 'House 12, Road 4, Dhanmondi, Dhaka',
                'latitude' => '23.7471000',
                'longitude' => '90.3742000',
                'mobile' => '01711000001',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 42,
                'district_id' => 2,
                'name' => 'Chittagong City Store',
                'slug' => 'chittagong-city-store',
                'area' => 'Agrabad',
                'address' => '36 Agrabad Commercial Area, Chittagong',
                'latitude' => '22.3359000',
                'longitude' => '91.8327000',
                'mobile' => '01711000002',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 43,
                'district_id' => 3,
                'name' => 'Khulna Mart',
                'slug' => 'khulna-mart',
                'area' => 'Sonadanga',
                'address' => '23 Sonadanga Main Road, Khulna',
                'latitude' => '22.8456000',
                'longitude' => '89.5403000',
                'mobile' => '01711000003',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 44,
                'district_id' => 4,
                'name' => 'Rajshahi Center',
                'slug' => 'rajshahi-center',
                'area' => 'Shaheb Bazar',
                'address' => '125 Shaheb Bazar, Rajshahi',
                'latitude' => '24.3740000',
                'longitude' => '88.6010000',
                'mobile' => '01711000004',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 45,
                'district_id' => 5,
                'name' => 'Barishal Point',
                'slug' => 'barishal-point',
                'area' => 'Nathullabad',
                'address' => 'Nathullabad Bus Stand Area, Barishal',
                'latitude' => '22.7010000',
                'longitude' => '90.3535000',
                'mobile' => '01711000005',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 46,
                'district_id' => 6,
                'name' => 'Sylhet Mega Store',
                'slug' => 'sylhet-mega-store',
                'area' => 'Zindabazar',
                'address' => 'Modina Market, Zindabazar, Sylhet',
                'latitude' => '24.8949000',
                'longitude' => '91.8687000',
                'mobile' => '01711000006',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 47,
                'district_id' => 7,
                'name' => 'Rangpur Outlet',
                'slug' => 'rangpur-outlet',
                'area' => 'Jahaj Company Mor',
                'address' => 'Jahaj Company Mor, Rangpur City',
                'latitude' => '25.7504000',
                'longitude' => '89.2513000',
                'mobile' => '01711000007',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 48,
                'district_id' => 8,
                'name' => 'Mymensingh Superstore',
                'slug' => 'mymensingh-superstore',
                'area' => 'Ganginar Par',
                'address' => 'Ganginar Par, Mymensingh',
                'latitude' => '24.7471000',
                'longitude' => '90.4203000',
                'mobile' => '01711000008',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 49,
                'district_id' => 9,
                'name' => 'Comilla Plaza',
                'slug' => 'comilla-plaza',
                'area' => 'Kandirpar',
                'address' => 'Kandirpar, Comilla City',
                'latitude' => '23.4619000',
                'longitude' => '91.1809000',
                'mobile' => '01711000009',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 50,
                'district_id' => 10,
                'name' => 'Narayanganj Trade Center',
                'slug' => 'narayanganj-trade-center',
                'area' => 'Chashara',
                'address' => 'Chashara, Narayanganj',
                'latitude' => '23.6204000',
                'longitude' => '90.5003000',
                'mobile' => '01711000010',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 51,
                'district_id' => 11,
                'name' => 'Gazipur Mega Mall',
                'slug' => 'gazipur-mega-mall',
                'area' => 'Tongi',
                'address' => 'Tongi Bazar, Gazipur',
                'latitude' => '23.8974000',
                'longitude' => '90.4029000',
                'mobile' => '01711000011',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 52,
                'district_id' => 12,
                'name' => 'Jessore Corner',
                'slug' => 'jessore-corner',
                'area' => 'Ghop Area',
                'address' => 'Ghop Area, Jessore',
                'latitude' => '23.1707000',
                'longitude' => '89.2075000',
                'mobile' => '01711000012',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 53,
                'district_id' => 13,
                'name' => 'Cox’s Bazar Store',
                'slug' => 'coxs-bazar-store',
                'area' => 'Laboni Point',
                'address' => 'Laboni Beach Road, Cox’s Bazar',
                'latitude' => '21.4272000',
                'longitude' => '92.0058000',
                'mobile' => '01711000013',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 54,
                'district_id' => 14,
                'name' => 'Pabna Center',
                'slug' => 'pabna-center',
                'area' => 'Edward College Road',
                'address' => 'Edward College Road, Pabna',
                'latitude' => '24.0064000',
                'longitude' => '89.2372000',
                'mobile' => '01711000014',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 55,
                'district_id' => 15,
                'name' => 'Bogra Mart',
                'slug' => 'bogra-mart',
                'area' => 'Satmatha',
                'address' => 'Satmatha, Bogra Town',
                'latitude' => '24.8465000',
                'longitude' => '89.3770000',
                'mobile' => '01711000015',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 56,
                'district_id' => 16,
                'name' => 'Faridpur Store',
                'slug' => 'faridpur-store',
                'area' => 'Goalchamat',
                'address' => 'Goalchamat Road, Faridpur',
                'latitude' => '23.6075000',
                'longitude' => '89.8425000',
                'mobile' => '01711000016',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 57,
                'district_id' => 17,
                'name' => 'Kushtia Trade Hub',
                'slug' => 'kushtia-trade-hub',
                'area' => 'NS Road',
                'address' => 'NS Road, Kushtia City',
                'latitude' => '23.9013000',
                'longitude' => '89.1203000',
                'mobile' => '01711000017',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 58,
                'district_id' => 18,
                'name' => 'Noakhali Super Mart',
                'slug' => 'noakhali-super-mart',
                'area' => 'Maijdee Court',
                'address' => 'Maijdee Court Area, Noakhali',
                'latitude' => '22.8240000',
                'longitude' => '91.0990000',
                'mobile' => '01711000018',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 59,
                'district_id' => 19,
                'name' => 'Tangail City Store',
                'slug' => 'tangail-city-store',
                'area' => 'VIP Road',
                'address' => 'VIP Road, Tangail Sadar',
                'latitude' => '24.2476000',
                'longitude' => '89.9167000',
                'mobile' => '01711000019',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 60,
                'district_id' => 20,
                'name' => 'Sirajganj Market',
                'slug' => 'sirajganj-market',
                'area' => 'Rashid Bazar',
                'address' => 'Rashid Bazar, Sirajganj',
                'latitude' => '24.4500000',
                'longitude' => '89.7000000',
                'mobile' => '01711000020',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}