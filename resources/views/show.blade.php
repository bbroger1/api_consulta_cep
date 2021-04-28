<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Detalhe CEP</title>
</head>

<body>
    <div class="container">
        <div>
            <h3>Detalhe CEP</h3>
        </div>
        <div>
            <div class="form-group">
                @foreach ($cep as $cep)
                    <label class="form-label">Cep: </label> {{ $cep->cep }}<br>
                    <label class="form-label">Logradouro: </label> {{ $cep->address }}<br>
                    <label class="form-label">Número: </label> {{ $cep->number }}<br>
                    <label class="form-label">Complemento: </label> {{ $cep->complement }}<br>
                    <label class="form-label">Bairro: </label> {{ $cep->neighboard }}<br>
                    <label class="form-label">Cidade: </label> {{ $cep->city }}<br>
                    <label class="form-label">UF: </label> {{ $cep->uf }}
                @endforeach
            </div>
            <a href="{{ route('address.index') }}" class="btn btn-success">Voltar</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>
