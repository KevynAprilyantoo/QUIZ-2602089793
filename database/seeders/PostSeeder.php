<?php

namespace Database\Seeders;

use App\Models\post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Factory::create();

        $modules = [
            // Data Science Category
            [
                'title' => 'Machine Learning',
                'slug' => 'machine-learning',
                'category_id' => 1,
                'writer_id' => 1,
                'thumbnail' => 'images/machine.jpg'
            ],
            [
                'title' => 'Deep Learning',
                'slug' => 'deep-learning',
                'category_id' => 1,
                'writer_id' => 2,
                'thumbnail' => 'images/deep.jpeg'
            ],
            [
                'title' => 'Natural Language Processing',
                'slug' => 'nlp',
                'category_id' => 1,
                'writer_id' => 2,
                'thumbnail' => 'images/nlp.jpg'
            ],
            // Network Category
            [
                'title' => 'Fundamental Network Security',
                'slug' => 'fundamental-network-security',
                'category_id' => 2,
                'writer_id' => 1,
                'thumbnail' => 'images/net-security.jpeg'
            ],
            [
                'title' => 'Cloud Computing',
                'slug' => 'cloud-computing',
                'category_id' => 2,
                'writer_id' => 3,
                'thumbnail' => 'images/cloud.png'
            ],
            [
                'title' => 'Network Administration',
                'slug' => 'network-administration',
                'category_id' => 2,
                'writer_id' => 3,
                'thumbnail' => 'images/net-adm.jpg'
            ],
        ];

        foreach ($modules as $module) {
            $publishedDate = $faker->dateTimeThisYear()->format('Y-m-d');

            post::create([
                'title' => $module['title'],
                'slug' => $module['slug'],
                'short_description' => $faker->paragraph,
                'content' => $faker->paragraphs(5, true),
                'thumbnail' => $module['thumbnail'],
                'published_date' => $publishedDate,
                'category_id' => $module['category_id'],
                'writer_id' => $module['writer_id'],
                'is_popular' => true,
            ]);
        }
    }
}
