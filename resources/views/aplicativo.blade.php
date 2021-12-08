<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicativo</title>
    <link rel="stylesheet" href="{{asset('css/aplicativo.css')}}"/>
</head>
<body>
    <header>
        <picture><img src="img/logo.png" alt="logo"/></picture>
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
        <div><img src="img/linha.png" alt="linha"/></div>
    </header>
    <nav>
        <div><a href="/sobre"><picture><img src="img/soa.png" alt="soa"/></picture></a></div>
        <div><a href="/termos"><img src="img/tdu.png" alt="tdu"/></a></div>
        <div><a href="/tags"><img src="img/sat.png" alt="sat"/></a></div>
        <div><a href="/utilizar"><img src="img/cuoa.png" alt="cuoa"/></a></div>
    </nav>
</body>
</html>