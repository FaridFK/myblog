<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // factory(Author::class, 10)->create()->each(function ($author) {
        //     $booksCount = rand(1, 5);
        //     while ($booksCount > 0) {
        //         $author->books()->save(factory(Book::class)->make());
        //         $booksCount--;
        //     }
        // });
        // Create 10 authors and attach random books to each author
        Author::factory(10)->create()->each(function ($author) {
            $author->books()->saveMany(Book::factory(rand(1, 5))->make());
        });
    }
}