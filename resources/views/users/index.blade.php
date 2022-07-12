@extends('template.users')
@section('title', 'Listagem de Usuario')


@section('content')

    <h1>Listagem de Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm mb-3">Novo Cadastro</a>
    
    <table class="table table-light table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">FOTO</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">POSTAGEM</th>
                <th scope="col">DATA CADASTRO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    @if($user->image)
                    <th><img src="{{ asset('storage/'.$user->image) }}" width="60px" height="60px"></th>
                    @else
                    <th><img src="{{ asset('storage/profile/avatar.jpg') }}" width="60px" height="60px"></th>
                    @endif

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('posts.show', $user->id) }}" class="btn btn-outline-dark btn-sm">Postagem - {{ $user->posts->count() }}</a>
                    </td>
                    <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Visualizar</a>

                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
<div class="justify-content-center pagination color-black">
    {{ $users->links('pagination::bootstrap-4') }}
</div>
    

@endsection
