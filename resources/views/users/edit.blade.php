@extends('template.users')
@section('title', 'Alterar Usuario')


@section('content')
    <h1>Alterar Usuario {{ $user->name }}</h1>
    @if ($errors->any())

    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>

@endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        
        
            
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Informe seu nome"  value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Informe seu email" value="{{ $user->email }}">

            </div>
               
            <button type="submit" class="btn btn-primary">Atualizar</button>
       
    </form>



@endsection
