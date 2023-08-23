<x-app-layout>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2>Editar Livro</h2>
        <form action="{{ route('books-update', ['id' => $book->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" value="{{ $book->titulo }}"><br>

            <label for="paginas">Páginas:</label>
            <input type="text" name="paginas" class="form-control" value="{{ $book->paginas }}"><br>

            <label for="valor">Valor:</label>
            <input type="text" name="valor" class="form-control" value="{{ $book->valor }}"><br>

            <label for="author_id">Autor:</label>
            <select name="author_id" class="form-control">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id === $book->id_author ? 'selected' : '' }}>{{ $author->nome }}</option>
                @endforeach
            </select><br>

            <button type="submit" class="btn btn-outline-primary btn-sm">Atualizar Livro</button>
        </form>
    </div>
            </div>
        </div>
@endsection
</x-app-layout>
