<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Naruto',
            'description' => 'Kisah tentang seorang ninja yang mencari jalan ninjanya sendiri.',
            'price' => 29000,
            'stock' => 26,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);

        Book::create([
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'seni.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
        'description' => 'Kisah perjuangan sekelompok anak-anak di Belitung dalam menempuh pendidikan dan mengejar mimpi mereka.',
        'price' => 50000,
        'stock' => 20,
        'cover_photo' => 'laskar_pelangi.jpg',
        'genre_id' => 1,
        'author_id' => 4,
        ]);

        Book::create([
            'title' => 'Dilan 1990',
        'description' => 'Cerita romantis remaja di Bandung tahun 1990 tentang Dilan dan Milea.',
        'price' => 40000,
        'stock' => 15,
        'cover_photo' => 'dilan_1990.jpg',
        'genre_id' => 2,
        'author_id' => 5,
        ]);
    }
}
