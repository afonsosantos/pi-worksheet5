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
    <h2>Novo Curso</h2>

    <form method="post" action="{{ route('cursos.store') }}">
        @csrf

        @include('cursos.shared.fields')

        <div>
            <button type="submit" name="ok" class="btn btn-primary">Guardar novo curso</button>
        </div>
    </form>
</body>

</html>
