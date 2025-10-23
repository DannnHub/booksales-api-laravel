<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Genre yang menekankan pada adegan aksi, pertempuran dan konflik.',
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre yang menekankan pada hubungan cinta dan asmara',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Genre yang mengeksplorasi dunia imajinasi',
        ]);
    }
}
