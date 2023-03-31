<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="container my-3">
    <h1>Lista de cursos</h1>
    <p class="my-4"><a href="{{ route('cursos.create') }}">Criar novo curso</a></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Abreviatura</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th class="text-center">N.º Semestres</th>
                <th class="text-center">N.º Vagas</th>
                <th colspan="3" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->abreviatura }}</td>
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->tipo }}</td>
                <td class="text-center">{{ $curso->semestres }}</td>
                <td class="text-center">{{ $curso->vagas }}</td>
                <td>
                    <a href="{{ route('cursos.show', ['curso' => $curso]) }}" class="btn btn-sm btn-dark">Consultar</a>
                </td>
                <td>
                    <a href="{{ route('cursos.edit', ['curso' => $curso]) }}" class="btn btn-sm btn-warning">Alterar</a>
                </td>
                <td>
                    <form action="{{ route('cursos.destroy', ['curso' => $curso]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="delete" class="btn btn-sm btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
