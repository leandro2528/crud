<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\Author;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('author')->get();
        return view('books.index', ['books'=>$books]);
    }
}
