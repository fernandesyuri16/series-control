<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> {{ $title }} - Controle de Séries </title>
        @vite('resources/css/app.scss')
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('series.index') }}">Home</a>

            @auth
                <a href="{{ route('logout') }}" class="navbar-brand">Logout</a>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="navbar-brand">Login</a>
            @endguest
        </div>
    </nav>
    <body class="container">
        <h1 class="text-3x1 font-bold underline">
            {{ $title }}
        </h1>

        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset($mensagemSucesso)

        @if ($errors -> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ $slot }}
    </body>
</html>