<x-app-layout>
    @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container">

                        <div class="row">
                            <div class="col-10 fs-4">
                                Cadastro de Livros
                            </div>
                            <div class="col-2">
                                <a class="btn btn-outline-secondary btn-sm" href="{{ route('books-index') }}">Voltar</a>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12">
                                
                                <form action="{{ route('books-store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="author_id">Author</label>
                                        <select name="author_id" class="form-control">
                                                <option value="">-- Selecione um Author --</option>
                                            @foreach( $authors as $author )
                                                <option value="{{ $author->id }}">{{ $author->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group my-3">
                                        <label for="titulo">Titulo do Livro</label>
                                        <input type="text" name="titulo" class="form-control rounded">
                                        @error('titulo')
                                        <p class="alert alert-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group my-3">
                                        <label for="paginas">Quantidade de Páginas</label>
                                        <input type="text" name="paginas" class="form-control rounded">
                                        @error('paginas')
                                        <p class="alert alert-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group my-3">
                                        <label for="valor">Valor</label>
                                        <input type="text" name="valor" class="form-control rounded">
                                        @error('valor')
                                        <p class="alert alert-danger mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group my-3">
                                        <input type="submit" name="submit" class="btn btn-outline-primary btn-sm">
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    @endsection

</x-app-layout>