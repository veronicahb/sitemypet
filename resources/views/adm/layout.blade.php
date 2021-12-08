<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribuinte</title>
    <link rel="stylesheet" href="{{asset('css/contribua.css')}}"/>
</head>
<body>
    <header>
        <picture><img src="img/logoaa.png" alt="logoaa"/></picture>
        <a href="/">Principal</a>
        <a href="/aplicativo">Aplicativo</a>
        <a href="/ajuda">Ajuda</a>
        @if (Route::has('login'))
            @auth
            <a href="{{ url('/contribuinte') }}">Contribuições</a>
            @else
            <a href="{{ route('login') }}">Entrar</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Cadastrar</a>
            @endif
            @endauth
        @endif
        <div><img src="img/linhaaa.png" alt="linhaaa"/></div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>