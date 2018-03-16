<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Book;

class BookUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $books = Book::all();

        foreach ($books as $book) {
            $users->random()->books()->attach($book);
        }
    }
}
