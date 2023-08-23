<x-app-layout>
    @section('content')
<div class="container">

    <div class="row">

        <div class="col-12 my-4 d-flex justify-content-around">

            <div class="card border-none shadow">
                <ca class="card-content">
                    <div class="card-body">
                        <div class="card-icon d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#666" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                            </svg>
                        </div>
                        <div class="card-info fs-3">
                            <div class="card-title text-end ">Autores</div>
                            <div class="card-qtd text-end ">
                                0{{ $totalAuthors }}
                            </div>
                        </div>
                    </div>
                </ca>
            </div>

            <div class="card border-none shadow">
                <ca class="card-content">
                    <div class="card-body">
                        <div class="card-icon d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#666" class="bi bi-book" viewBox="0 0 16 16">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg>
                        </div>
                        <div class="card-info fs-3">
                            <div class="card-title text-end ">Livros</div>
                            <div class="card-qtd text-end ">
                                0{{ $totalBooks }}
                            </div>
                        </div>
                    </div>
                </ca>
            </div>

        </div>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container">

                        <div class="row">
                            <table class="table table-bordered table-striped table-hover">
                                <thead style="font-size: 14px;">
                                    <tr>
                                        <th>Autor</th>
                                        <th>titulo do Livro</th>
                                        <th>Quantidade de Páginas</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>

                                <tbody style="font-size: 14px;">
                                @foreach( $books as $book )
                                    <tr>
                                        <td>{{ $book->author->nome }}</td>
                                        <td>{{ $book->titulo }}</td>
                                        <td>{{ $book->paginas }}</td>
                                        <td>{{ $book->valor }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="container">

                        <div class="row">
                            <table class="table table-bordered table-striped table-hover">
                                <thead style="font-size: 14px;">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>

                                <tbody style="font-size: 14px;">
                                @foreach( $authors as $author )
                                    <tr>
                                        <td>{{ $author->nome }}</td>
                                        <td>{{ $author->email }}</td>
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
</div>

    @endsection
</x-app-layout>
