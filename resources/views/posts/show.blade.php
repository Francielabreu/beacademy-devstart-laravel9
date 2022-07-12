@extends('template.users')
@section('title', "Listagem de Postagem do {$user->name}")
@section('content')

    <h1>Postagem do {{ $user->name }}</h1>

    @foreach($posts as $post)
        <div class="mb-3">
            <label class="form-label">Identificação Nº:<br><b>{{ $post->id }}</b></label>
            <br>
            <label class="form-label">Status:<br><b>{{ $post->active?'Ativo':'Inativo' }}</b></label>
            <br>
            <label class="form-label">Titulo:<br><b>{{ $post->title }}</b></label>
            <br>
            <label class="form-label">Postagem:<br></label>
            <br>
            <textarea class="form-control" row="5">Postagem:{{ $post->post }}</textarea>
        </div>
    @endforeach
@endsection
