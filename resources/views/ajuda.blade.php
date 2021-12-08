<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda</title>
    <link rel="stylesheet" href="{{asset('css/ajuda.css')}}"/>
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
            <h1> ONG necessita de nossa ajuda? Entre em contato conosco!</h1>
            <picture><img src="img/sociais.png" alt="sociais"/></picture>
        </div>
        <div><img src="img/patinhas.png" alt="patinhas"/></div>  
    </nav>
</body>
</html>