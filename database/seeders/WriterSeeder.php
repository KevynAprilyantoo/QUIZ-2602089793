<?php

namespace Database\Seeders;

use App\Models\writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $writers = [
            [
                'name' => 'Raka Putra Wicaksono',
                'specialization' => 'Spesialis Interactive Multimedia',
                'image' => 'images/prof1.jpeg'
            ],
            [
                'name' => 'Bia Mecca Annisa',
                'specialization' => 'Spesialis Data Science',
                'image' => 'images/prof2.jpeg'
            ],
            [
                'name' => 'Abi Firmansyah',
                'specialization' => 'Spesialis Network Security',
                'image' => 'images/prof3.jpeg'
            ],
        ];

        foreach ($writers as $writer) {
            Writer::create($writer);
        } 
    }
}
