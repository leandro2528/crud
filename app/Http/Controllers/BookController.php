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

    public function create() {
        $authors = Author::all();
        return view('books.create', ['authors'=>$authors]);
    }

    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required',
            'paginas' => 'required',
            'valor' => 'required',
            'author_id' => 'required'
        ]);

        $book = new Book($request->only('titulo','paginas','valor'));
        $book->id_author = $request->input('author_id');
        $book->save();

        return redirect()->route('books-index');
    }
}
