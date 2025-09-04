<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrackOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('track_orders')->delete();
        
        \DB::table('track_orders')->insert(array (
            0 => 
            array (
                'id' => 176,
                'order_id' => 318,
                'title' => 'Pending',
                'created_at' => '2021-09-12 12:07:09',
                'updated_at' => '2021-09-12 12:07:09',
            ),
            1 => 
            array (
                'id' => 177,
                'order_id' => 1,
                'title' => 'Pending',
                'created_at' => '2021-09-13 13:11:25',
                'updated_at' => '2021-09-13 13:11:25',
            ),
            2 => 
            array (
                'id' => 178,
                'order_id' => 22,
                'title' => 'Pending',
                'created_at' => '2021-09-13 15:13:48',
                'updated_at' => '2021-09-13 15:13:48',
            ),
            3 => 
            array (
                'id' => 179,
                'order_id' => 22,
                'title' => 'Pending',
                'created_at' => '2021-09-13 15:14:34',
                'updated_at' => '2021-09-13 15:14:34',
            ),
            4 => 
            array (
                'id' => 180,
                'order_id' => 23,
                'title' => 'Pending',
                'created_at' => '2021-09-13 15:15:09',
                'updated_at' => '2021-09-13 15:15:09',
            ),
            5 => 
            array (
                'id' => 182,
                'order_id' => 25,
                'title' => 'Pending',
                'created_at' => '2021-09-13 15:22:56',
                'updated_at' => '2021-09-13 15:22:56',
            ),
            6 => 
            array (
                'id' => 187,
                'order_id' => 30,
                'title' => 'Pending',
                'created_at' => '2021-09-18 14:44:06',
                'updated_at' => '2021-09-18 14:44:06',
            ),
            7 => 
            array (
                'id' => 300,
                'order_id' => 122,
                'title' => 'Pending',
                'created_at' => '2022-01-16 15:37:45',
                'updated_at' => '2022-01-16 15:37:45',
            ),
            8 => 
            array (
                'id' => 301,
                'order_id' => 123,
                'title' => 'Pending',
                'created_at' => '2022-01-16 16:00:15',
                'updated_at' => '2022-01-16 16:00:15',
            ),
            9 => 
            array (
                'id' => 302,
                'order_id' => 124,
                'title' => 'Pending',
                'created_at' => '2022-01-16 16:03:35',
                'updated_at' => '2022-01-16 16:03:35',
            ),
            10 => 
            array (
                'id' => 303,
                'order_id' => 125,
                'title' => 'Pending',
                'created_at' => '2022-01-16 16:08:36',
                'updated_at' => '2022-01-16 16:08:36',
            ),
            11 => 
            array (
                'id' => 304,
                'order_id' => 126,
                'title' => 'Pending',
                'created_at' => '2022-01-16 17:31:41',
                'updated_at' => '2022-01-16 17:31:41',
            ),
            12 => 
            array (
                'id' => 305,
                'order_id' => 127,
                'title' => 'Pending',
                'created_at' => '2022-01-16 17:33:57',
                'updated_at' => '2022-01-16 17:33:57',
            ),
            13 => 
            array (
                'id' => 306,
                'order_id' => 128,
                'title' => 'Pending',
                'created_at' => '2022-01-16 17:36:51',
                'updated_at' => '2022-01-16 17:36:51',
            ),
            14 => 
            array (
                'id' => 307,
                'order_id' => 129,
                'title' => 'Pending',
                'created_at' => '2022-01-16 17:40:48',
                'updated_at' => '2022-01-16 17:40:48',
            ),
            15 => 
            array (
                'id' => 308,
                'order_id' => 129,
                'title' => 'In Progress',
                'created_at' => '2022-01-17 09:59:09',
                'updated_at' => '2022-01-17 09:59:09',
            ),
            16 => 
            array (
                'id' => 309,
                'order_id' => 129,
                'title' => 'Delivered',
                'created_at' => '2022-01-17 09:59:09',
                'updated_at' => '2022-01-17 09:59:09',
            ),
            17 => 
            array (
                'id' => 310,
                'order_id' => 128,
                'title' => 'In Progress',
                'created_at' => '2022-01-17 09:59:15',
                'updated_at' => '2022-01-17 09:59:15',
            ),
            18 => 
            array (
                'id' => 311,
                'order_id' => 128,
                'title' => 'Delivered',
                'created_at' => '2022-01-17 09:59:15',
                'updated_at' => '2022-01-17 09:59:15',
            ),
            19 => 
            array (
                'id' => 312,
                'order_id' => 127,
                'title' => 'In Progress',
                'created_at' => '2022-01-17 09:59:21',
                'updated_at' => '2022-01-17 09:59:21',
            ),
            20 => 
            array (
                'id' => 313,
                'order_id' => 127,
                'title' => 'Delivered',
                'created_at' => '2022-01-17 09:59:21',
                'updated_at' => '2022-01-17 09:59:21',
            ),
            21 => 
            array (
                'id' => 314,
                'order_id' => 126,
                'title' => 'In Progress',
                'created_at' => '2022-01-17 09:59:27',
                'updated_at' => '2022-01-17 09:59:27',
            ),
            22 => 
            array (
                'id' => 315,
                'order_id' => 126,
                'title' => 'Delivered',
                'created_at' => '2022-01-17 09:59:27',
                'updated_at' => '2022-01-17 09:59:27',
            ),
            23 => 
            array (
                'id' => 316,
                'order_id' => 125,
                'title' => 'In Progress',
                'created_at' => '2022-02-28 14:24:36',
                'updated_at' => '2022-02-28 14:24:36',
            ),
            24 => 
            array (
                'id' => 317,
                'order_id' => 130,
                'title' => 'Pending',
                'created_at' => '2022-03-01 16:10:39',
                'updated_at' => '2022-03-01 16:10:39',
            ),
            25 => 
            array (
                'id' => 318,
                'order_id' => 131,
                'title' => 'Pending',
                'created_at' => '2022-03-02 08:15:49',
                'updated_at' => '2022-03-02 08:15:49',
            ),
            26 => 
            array (
                'id' => 319,
                'order_id' => 132,
                'title' => 'Pending',
                'created_at' => '2022-03-02 08:18:08',
                'updated_at' => '2022-03-02 08:18:08',
            ),
            27 => 
            array (
                'id' => 320,
                'order_id' => 133,
                'title' => 'Pending',
                'created_at' => '2025-04-13 21:53:01',
                'updated_at' => '2025-04-13 21:53:01',
            ),
            28 => 
            array (
                'id' => 321,
                'order_id' => 134,
                'title' => 'Pending',
                'created_at' => '2025-04-27 20:05:39',
                'updated_at' => '2025-04-27 20:05:39',
            ),
            29 => 
            array (
                'id' => 322,
                'order_id' => 135,
                'title' => 'Pending',
                'created_at' => '2025-04-27 20:06:24',
                'updated_at' => '2025-04-27 20:06:24',
            ),
        ));
        
        
    }
}