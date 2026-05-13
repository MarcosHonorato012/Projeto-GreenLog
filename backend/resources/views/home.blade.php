<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Startup Greenlog, Logistica Urbana Sustentável">

    <meta name="author" content="Gabriel Melgaço, Marcos Edeson, Caua Anselmo, Rafael Previtera, Thaisa Kelry">

    <title>GreenLog</title>

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

</head>

<body>

    <nav class="navbar">

        <div class="Logo">
            <h1>GreenLog</h1>
        </div>

        <div class="menu">

            <a href="{{ route('viagems.create') }}">
                Registro de Viagens
            </a>

            <a href="#">
                Cadastro de Veículos
            </a>

            <a id="login_link" href="{{ route('login') }}">
                Login
            </a>

        </div>

    </nav>

    <main class="conteudo">

        <h2>Logística Urbana Sustentável</h2>

        <p>
            Sistema GreenLog para gerenciamento de viagens e veículos.
        </p>

    </main>

</body>
</html>
