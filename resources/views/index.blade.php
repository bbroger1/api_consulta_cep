<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Consulta CEP</title>
</head>

<body>
    <div class="container">
        <div>
            <h3>Consulta CEP</h3>
        </div>
        <div>
            @include('_partials/alerts')
            <form method="GET" action="{{ route('address.find') }}">
                <div class="form-group">
                    <label for="cep" class="form-label">CEP</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="cep" id="cep" maxlength="8" minlength="8"
                            placeholder="Somente números">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Consultar</button>
                </div>
            </form>
        </div>

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Logradouro</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($address as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->cep }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->neighboard }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->uf }}</td>
                            <td><a href="{{ route('address.show', $item->cep) }}">Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-4">
            @if (isset($filters))
                {{ $address->appends($filters)->links() }}
            @else
                {{ $address->links() }}
            @endif
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
