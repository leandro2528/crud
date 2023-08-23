<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $books = Book::with('author')->get();
        $totalBooks = Book::count();
        $authors = Author::all();
        $totalAuthors = Author::count();
        return view('dashboard', ['books'=>$books, 'totalBooks'=>$totalBooks, 'authors'=>$authors, 'totalAuthors'=>$totalAuthors]);
    }
}
