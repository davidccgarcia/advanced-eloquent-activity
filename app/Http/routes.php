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
use App\User;

Route::get('/', function () {
    $categories = Category::whereHas('books', function ($query) {
        $query->where('status', 'public');
    })->get();

    return view('relationships', compact('categories'));
});

Route::get('querybuilder', function () {
    $users = DB::table('users')
        ->where('name', 'Dr. Renee Stoltenberg I')
        ->select('name as user_name', 'email')
        ->get();

    return view('querybuilder.index', compact('users'));
});

Route::get('manytomany', function() {
    $users = User::has('books')->get();

    return view('manytomany.index', compact('users'));
});

Route::get('manytomany/edit/{user_id}', [
    'as' => 'edit.manytomany', 
    'uses' => 'UserController@getEditManyToMany'
]);

Route::put('putEdit/{user_id}', [
    'as' => 'putEdit', 
    'uses' => 'UserController@putEdit'
]);

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
