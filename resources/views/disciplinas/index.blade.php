<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disciplinas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="container my-3">
    <h1>Lista de disciplinas</h1>
    <p class="my-4"><a href="{{ route('disciplinas.create') }}">Criar nova disciplina</a></p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Abreviatura</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Ano - Semestre</th>
                <th>ECTS</th>
                <th>Horas</th>
                <th>Opcional?</th>
                <th colspan="3" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina->abreviatura }}</td>
                <td>{{ $disciplina->nome }}</td>
                <td>{{ $disciplina->curso }}</td>
                <td>{{ $disciplina->ano }}.º - {{ $disciplina->semestre }}.º</td>
                <td class="text-center">{{ $disciplina->ECTS }}</td>
                <td class="text-center">{{ $disciplina->horas }} h</td>
                <td class="text-center">
                    {{ $disciplina->opcional == '1' ? 'Sim' : 'Não' }}
                </td>
                <td>
                    <a href="{{ route('disciplinas.show', ['disciplina' => $disciplina]) }}"
                        class="btn btn-sm btn-dark">Consultar</a>
                </td>
                <td>
                    <a href="{{ route('disciplinas.edit', ['disciplina' => $disciplina]) }}"
                        class="btn btn-sm btn-warning">Alterar</a>
                </td>
                {{--<td>
                    <form action="{{ route('cursos.destroy', ['curso' => $curso]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="delete" class="btn btn-sm btn-danger">Apagar</button>
                    </form>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
