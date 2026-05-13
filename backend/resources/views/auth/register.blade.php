<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Criar Conta - GreenLog</title>

    <link rel="stylesheet" href="{{ asset('css/criarconta.css') }}">

</head>

<body>

<main class="container">

    <main>

        <h1>Seja Bem-Vindo(a)</h1>

        <form action="{{ route('register.store') }}" method="POST">

            @csrf

            <div class="nome">
                <input
                    placeholder="Nome"
                    type="text"
                    name="nome"
                    required>
            </div>

            <div class="email">
                <input
                    placeholder="Email"
                    type="email"
                    name="email"
                    required>
            </div>

            <div class="senha">
                <input
                    placeholder="Senha"
                    type="password"
                    name="senha"
                    required>
            </div>

            <div class="telefone">
                <input
                    placeholder="Telefone"
                    type="tel"
                    name="telefone"
                    required>
            </div>

            <div class="telefone">
                <input
                    placeholder="CPF"
                    type="text"
                    name="cpf"
                    required>
            </div>

            <button type="submit">
                Criar Conta
            </button>

        </form>

    </main>

    <div class="links">

        <a href="/">
            Voltar para o site
        </a>

        <a href="/login">
            Entrar na conta
        </a>

    </div>

</main>

</body>
</html>
