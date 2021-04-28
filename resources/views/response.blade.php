<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Adicionar CEP</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-12">
            <h3>Adicionar CEP</h3>
        </div>
        <div class="col-sm-12">
            @include('_partials/alerts')
            <form method="POST" action="{{ route('address.store') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" required class="form-control" name="cep" id="cep"
                            value="{{ $response['cep'] }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address" class="form-label">Logradouro</label>
                        <input type="text" required class="form-control" name="address" id="address"
                            value="{{ $response['logradouro'] }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="number" class="form-label">Número</label>
                        <input type="text" required class="form-control" name="number" id="number">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="complement" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complement" id="complement"
                            value="{{ $response['complemento'] }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="neighboard" class="form-label">Bairro</label>
                        <input type="text" required class="form-control" name="neighboard" id="neighboard"
                            value="{{ $response['bairro'] }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="city" class="form-label">Cidade</label>
                        <input type="text" required class="form-control" name="city" id="city"
                            value="{{ $response['localidade'] }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="uf" class="form-label">Estado</label>
                        <input type="text" required class="form-control" name="uf" id="uf"
                            value="{{ $response['uf'] }}">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </form>
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
