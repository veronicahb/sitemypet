<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o APP</title>
    <link rel="stylesheet" href="{{asset('css/sobre.css')}}"/>
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
        <div><img src="img/patinhas.png" alt="patinhas"/></div>
        <div>
            <h1>Sobre o app My Pet</h1>
            <h3>O My Pet app é o aplicativo em forma de rede social para tornar toda ajuda disponível mais prática e ágil. Com a utilização de sua localização, conseguimos te colocar em contato com outros usuários perto de você. No app você pode relatar o desaparecimento de pets, encontro e adoção. ONGs também podem publicar suas notícias e receber ajuda!</h3>
            <div><img src="img/baixar.png" alt="baixar"/></div>
        </div>
        <div><img src="img/patinhas.png" alt="patinhas"/></div>
    </nav>
</body>
</html>