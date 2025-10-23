<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis Inggris, terkenal dengan seri Harry Potter yang mengisahkan dunia sihir dan petualangan anak-anak muda.',
            'photo' => 'rowling.jpg',
        ],
        [
            'name' => 'George R.R. Martin',
            'bio' => 'Penulis Amerika, pencipta seri A Song of Ice and Fire yang menginspirasi serial Game of Thrones.',
            'photo' => 'martin.jpg',
        ],
        [
            'name' => 'Agatha Christie',
            'bio' => 'Penulis Inggris, dikenal sebagai ratu misteri dengan karya-karya detektif klasik seperti Hercule Poirot dan Miss Marple.',
            'photo' => 'christie.jpg',
        ],
        [
            'name' => 'J.R.R. Tolkien',
            'bio' => 'Penulis Inggris, pencipta dunia fantasi Middle-earth dengan karya terkenal The Hobbit dan The Lord of the Rings.',
            'photo' => 'tolkien.jpg',
        ],
        [
            'name' => 'Isaac Asimov',
            'bio' => 'Penulis Amerika, terkenal dengan karya fiksi ilmiahnya, khususnya seri Robot dan Foundation yang berfokus pada sains dan masa depan.',
            'photo' => 'asimov.jpg',
        ],
    ];

    public function getAuthors() {
    return $this->authors;
    }
}
