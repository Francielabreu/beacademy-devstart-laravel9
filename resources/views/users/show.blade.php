@extends('template.users')
@section('title', $title)

@section('content')



    <h1>Usuario: {{ $user->name }}</h1>

    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DATA CADASTRO</th>
                <th scope="col" class="text-center">VISUALIZAR</th>
                <th scope="col" class="">EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                <td class="text-center">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>

                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Excluir</button>


                    </form>

                </td>
            </tr>

        </tbody>
    </table>

@endsection
