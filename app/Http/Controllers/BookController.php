<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\Author;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('author')->paginate(2);
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

    public function edit($id) {
        $book = Book::findOrFail($id);
        $authors = Author::all();

        return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'titulo' => 'required',
            'paginas' => 'required',
            'valor' => 'required',
            'author_id' => 'required'
        ]);

        $book = Book::findOrFail($id);
        $book->titulo = $request->input('titulo');
        $book->paginas = $request->input('paginas');
        $book->valor = $request->input('valor');
        $book->id_author = $request->input('author_id');

        $book->save();

        return redirect()->route('books-index')->with('success', 'Livro atualizado com sucesso!');
    }
    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books-index')->with('success', 'Livro excluido com sucess!!!');
    }
    
}



