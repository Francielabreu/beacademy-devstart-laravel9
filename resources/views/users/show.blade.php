<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Usuario: {{ $user->name }}</title>
</head>

<body>

    <div class="container">
        <h1>Usuario: {{ $user->name }}</h1>

        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">DATA CADASTRO</th>
                    <th scope="col" class="text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>

                    </td>
                </tr>

            </tbody>
        </table>


    </div>

</body>

</html>
