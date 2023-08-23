<x-app-layout>
    @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container">

                        <div class="row">
                            <div class="col-10 fs-4">
                                Livros Cadastrados
                            </div>
                            <div class="col-2">
                                <a class="btn btn-outline-primary btn-sm" href="">Novo</a>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead style="font-size: 14px;">
                                        <tr>
                                            <th>Autor</th>
                                            <th>Titulo do Livro</th>
                                            <th>Quanridade de Páginas</th>
                                            <th>Valor</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>

                                    <tbody style="font-size: 14px;">
                                    @foreach( $books as $book )
                                        <tr>
                                            <td>{{ $book->author->nome }}</td>
                                            <td>{{ $book->titulo }}</td>
                                            <td>{{ $book->paginas }}</td>
                                            <td>{{ $book->valor }}</td>
                                            <td>
                                                <a class="btn btn-outline-warning btn-sm" href="">Editar</a>
                                                <a class="btn btn-outline-danger btn-sm" href="">Excluir</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    @endsection

</x-app-layout>