<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'name' => 'Fantasy',
            'description' => 'Cerita yang berlatar di dunia magis atau imajiner dengan makhluk mitos dan kekuatan supernatural.',
        ],
        [
            'name' => 'Mystery',
            'description' => 'Berfokus pada pemecahan kejahatan, pengungkapan rahasia, atau alur cerita dengan kejutan tak terduga.',
        ],
        [
            'name' => 'Thriller',
            'description' => 'Cerita yang penuh ketegangan, cepat, dan menegangkan, sering kali melibatkan bahaya atau ancaman.',
        ],
        [
            'name' => 'Horror',
            'description' => 'Bertujuan menakuti, membuat tidak nyaman, atau mengejutkan pembaca melalui tema gelap atau unsur supernatural.',
        ],
        [
            'name' => 'Adventure',
            'description' => 'Mengisahkan perjalanan, penjelajahan, serta pengalaman berisiko yang dihadapi para tokoh.',
        ],
    ];

    public function getGenres() {
    return $this->genres;
    }
}
