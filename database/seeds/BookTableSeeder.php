<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $books = factory(Book::class)->times(20)->make();

        foreach ($books as $book) {
            $categories->random()->books()->save($book);
        }
    }
}
