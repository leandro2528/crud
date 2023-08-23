<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- StyleCss -->
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <div class="container-fluid">

                <div class="row">

                    <div class="col-2 p-0">

                        <nav class="shadow vh-100">
                            <ul class="">
                                <li class="fs-3 py-4 text-center">
                                    <a href="">Teste - Crud</a>
                                </li>

                                <li class="ps-4 py-2">
                                    <a href="">Autores</a>
                                </li>

                                <li class="ps-4 py-2">
                                    <a href="{{ route('books-index') }}">Livros </a>
                                </li>

                                <li class="ps-4 py-4">
                                   <a href="">Sair</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col-10">
                       @yield('content')
                    </div>

                </div>

            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
