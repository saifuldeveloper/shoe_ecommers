<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaPostsTableSeeder extends Seeder
{
  public function run(): void
    {
        $posts = [
            [
                'title' => 'Our latest Facebook update',
                'photo' => 'facebook_post1.jpg',
                'url' => 'image1.jpg',
                'type' => 'facebook',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Check out our Instagram reel',
                'photo' => 'image2.jpg',
                'url' => 'https://instagram.com/p/abcde',
                'type' => 'instagram',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New YouTube video uploaded',
                'photo' => 'image3.jpg',
                'url' => 'https://youtube.com/watch?v=xyz123',
                'type' => 'youtube',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Follow us on Twitter for updates',
                'photo' => 'image4.jpg',
                'url' => 'https://twitter.com/status/987654',
                'type' => 'twitter',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'We are now on LinkedIn!',
                'photo' => 'image5.jpg',
                'url' => 'https://linkedin.com/company/your-company',
                'type' => 'linkedin',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Special campaign on our blog',
                'photo' => 'image6.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'Special campaign on our blog',
                'photo' => 'image7.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Our latest Facebook update',
                'photo' => 'facebook_post1.jpg',
                'url' => 'image1.jpg',
                'type' => 'facebook',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Check out our Instagram reel',
                'photo' => 'image2.jpg',
                'url' => 'https://instagram.com/p/abcde',
                'type' => 'instagram',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New YouTube video uploaded',
                'photo' => 'image3.jpg',
                'url' => 'https://youtube.com/watch?v=xyz123',
                'type' => 'youtube',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Follow us on Twitter for updates',
                'photo' => 'image4.jpg',
                'url' => 'https://twitter.com/status/987654',
                'type' => 'twitter',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'We are now on LinkedIn!',
                'photo' => 'image5.jpg',
                'url' => 'https://linkedin.com/company/your-company',
                'type' => 'linkedin',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Special campaign on our blog',
                'photo' => 'image6.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'Special campaign on our blog',
                'photo' => 'image7.jpg',
                'url' => 'https://example.com/blog/special-campaign',
                'type' => 'other',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('social_media_posts')->insert($posts);
    }
}
