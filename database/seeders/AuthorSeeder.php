<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis Inggris, terkenal dengan seri Harry Potter yang mengisahkan dunia sihir dan petualangan anak-anak muda.',
            'photo' => 'rowling.jpg',
        ]);

        Author::create([
            'name' => 'George R.R. Martin',
            'bio' => 'Penulis Amerika, pencipta seri A Song of Ice and Fire yang menginspirasi serial Game of Thrones.',
            'photo' => 'martin.jpg',
        ]);

        Author::create([
            'name' => 'Agatha Christie',
            'bio' => 'Penulis Inggris, dikenal sebagai ratu misteri dengan karya-karya detektif klasik seperti Hercule Poirot dan Miss Marple.',
            'photo' => 'christie.jpg',
        ]);

        Author::create([
            'name' => 'J.R.R. Tolkien',
            'bio' => 'Penulis Inggris, pencipta dunia fantasi Middle-earth dengan karya terkenal The Hobbit dan The Lord of the Rings.',
            'photo' => 'tolkien.jpg',
        ]);

        Author::create([
            'name' => 'Isaac Asimov',
            'bio' => 'Penulis Amerika, terkenal dengan karya fiksi ilmiahnya, khususnya seri Robot dan Foundation yang berfokus pada sains dan masa depan.',
            'photo' => 'asimov.jpg',
        ]);
    }
}
