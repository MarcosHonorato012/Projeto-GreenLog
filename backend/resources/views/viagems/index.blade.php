<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Registro de Viagem</title>

    <link rel="stylesheet"
          href="{{ asset('css/siteregistro.css') }}">

</head>

<body>

<main class="container">

    <form action="{{ route('viagems.store') }}"
          method="POST">

        @csrf

        <h1>
            Registro de Viagem
        </h1>

        <select name="veiculo_id"
                required>

            <option value="">
                Selecione o veículo
            </option>

            @foreach($veiculos as $veiculo)

                <option value="{{ $veiculo->id }}">

                    {{ $veiculo->marca }}
                    -
                    {{ $veiculo->modelo }}

                </option>

            @endforeach

        </select>

        <input type="date"
               name="data_criacao"
               required>

        <input type="text"
               name="partida"
               placeholder="Origem"
               required>

        <input type="text"
               name="destino"
               placeholder="Destino"
               required>

        <input type="number"
               name="distancia_km"
               placeholder="Distância KM"
               required>

        <input type="text"
               name="conclusao"
               placeholder="Status">

        <textarea name="observacao"
                  placeholder="Observação"></textarea>

        <button type="submit">

            Registrar

        </button>

        <a href="/">
            Voltar
        </a>

    </form>

</main>

</body>

</html>
