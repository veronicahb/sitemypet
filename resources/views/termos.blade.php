<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de Uso</title>
    <link rel="stylesheet" href="{{asset('css/termos.css')}}"/>
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
            <h1>Termos de Uso</h1>
            <h3>O aplicativo utiliza sua localizão, câmera e galeria para deixar o serviço mais dinâmico. Tal como definido pela Lei nº 13.709 de 14 de agosto de 2019 e suas atualizações, toda informação relacionada a pessoa natural identificada ou identificável. Assim como as permissões também são confidenciais. São oferecidos serviços de comunicação com ONGs e com os criadores do site. Moderação está presente no aplicativo e no site. Não será aceito qualquer tipo de preconceito ou mal-trato, assim como a divulgação de mídias inapropriadas.</h3>
        </div>
        <div><img src="img/patinhas.png" alt="patinhas"/></div>
    </nav>
</body>
</html>