@extends('template.users')
@section('title', 'Cadastrar Usuario')


@section('content')
    <h1>Cadastrar novo Usuario</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        
        
            
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Informe seu nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Informe seu email">

            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Informe sua senha">

            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
       
    </form>



@endsection
