<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'Naruto',
            'description' => 'Kisah tentang seorang ninja atas jalan ninjanya.',
            'price' => 29000,
            'stock' => 26,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],
        [
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'seni.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
    ];

    public function getBooks() {
    return $this->books;
    }
}