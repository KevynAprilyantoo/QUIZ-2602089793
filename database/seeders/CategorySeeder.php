<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Data Science',
                'slug' => 'data-science',
            ],
            [
                'name' => 'Network Security',
                'slug' => 'network security',
            ],
        ];

        foreach ($categories as $category) {
            category::create($category);
        }
    }
}
