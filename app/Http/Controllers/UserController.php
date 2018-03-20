<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Book;

class UserController extends Controller
{
    public function getEditManyToMany($userId)
    {
        $user = User::find($userId);
        $books = Book::orderBy('id', 'DESC')->lists('title', 'id')->toArray();

        return view('manytomany.edit', compact('user', 'books'));
    }

    public function putEdit(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->books()->sync($request->get('books'));

        return redirect('/');
    }

    public function index()
    {
        $users = User::all();

        return view('manytomany.index', compact('users'));
    }
}
