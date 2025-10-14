<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialMediaPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_media_posts')->delete();
        
        \DB::table('social_media_posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Our latest Facebook update',
                'photo' => 'facebook_post1.jpg',
                'url' => 'image1.jpg',
                'type' => 'facebook',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Check out our Instagram reel',
                'photo' => 'image2.jpg',
                'url' => 'https://instagram.com/p/abcde',
                'type' => 'instagram',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'New YouTube video uploaded',
                'photo' => 'image3.jpg',
                'url' => 'https://youtube.com/watch?v=xyz123',
                'type' => 'youtube',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Follow us on Twitter for updates',
                'photo' => 'image4.jpg',
                'url' => 'https://twitter.com/status/987654',
                'type' => 'twitter',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'We are now on LinkedIn!',
                'photo' => 'OM_1760421574OgQUU7ck.jpeg',
                'url' => 'https://linkedin.com/company/your-company',
                'type' => 'linkedin',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:59:34',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Special campaign on our blog',
                'photo' => 'image6.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Special campaign on our blog',
                'photo' => 'image7.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Our latest Facebook update',
                'photo' => 'OM_1760421567EzgbfTvV.jpeg',
                'url' => 'http://shoe_ecommers.test/admin/socialmediapost/8/edit',
                'type' => 'facebook',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:59:27',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Check out our Instagram reel',
                'photo' => 'image2.jpg',
                'url' => 'https://instagram.com/p/abcde',
                'type' => 'instagram',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'New YouTube video uploaded',
                'photo' => 'image3.jpg',
                'url' => 'https://youtube.com/watch?v=xyz123',
                'type' => 'youtube',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Follow us on Twitter for updates',
                'photo' => 'image4.jpg',
                'url' => 'https://twitter.com/status/987654',
                'type' => 'twitter',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'We are now on LinkedIn!',
                'photo' => 'OM_17604215521ZFltp7R.jpg',
                'url' => 'https://linkedin.com/company/your-company',
                'type' => 'linkedin',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:59:12',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Special campaign on our blog',
                'photo' => 'image6.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Special campaign on our blog',
                'photo' => 'image7.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => 1,
                'created_at' => '2025-10-14 05:54:53',
                'updated_at' => '2025-10-14 05:54:53',
            ),
        ));
        
        
    }
}