<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - GreenLog</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>

    <main class="container">

        <main>

            <h1>Entrar na conta</h1>

            @if(session('erro'))

                <p style="color:red; text-align:center; margin-bottom:15px;">

                    {{ session('erro') }}

                </p>

            @endif

            <form action="{{ route('login.auth') }}" method="POST">

                @csrf

                <div class="email">

                    <input
                        placeholder="Email"
                        type="email"
                        name="email"
                        required
                    >

                </div>

                <div class="senha">

                    <input
                        placeholder="Senha"
                        type="password"
                        name="senha"
                        required
                    >

                </div>

                <button type="submit">

                    Entrar

                </button>

            </form>

        </main>

        <div class="links">

            <a href="/">
                Voltar para o site
            </a>

            <a href="/register">
                Criar conta
            </a>

        </div>

    </main>

</body>
</html>
