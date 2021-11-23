<?php

namespace Database\Seeders;

use App\Models\BookAuthor;
use \App\Models\Author;
use \App\Models\Book;
use Illuminate\Database\Seeder;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // take existing authors and books, to create bookAuthors
        for($i = 0; $i < 5; $i++){
            $bookAuthor = new BookAuthor;
            $bookAuthor->book_id = \App\Models\Book::all()->random()->id;
            $bookAuthor->author_id = \App\Models\Author::all()->random()->id;
            $bookAuthor->save();
        }
    }
}
