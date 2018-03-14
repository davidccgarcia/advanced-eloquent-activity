<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;
use App\Category;
use App\Book;

Route::get('/', function () {
    $categories = Category::all();

    return view('relationships', compact('categories'));
});

Route::get('books', function () {
    $books = Book::all();

    return view('books', compact('books'));
});

Route::delete('books/destroy', function (Request $request) {
    $books = $request->get('books');

    if (count($books)) {
        Book::destroy($books);
    }

    return back();
});
