@extends('template.users')
@section('title', 'Listagem de Postagem')


@section('content')

    <h1>Listagem de Postagem</h1>
    
    <table class="table table-light table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">USUARIO</th>
                <th scope="col">TITULO</th>
                <th scope="col">POSTAGEM</th>
                <th scope="col">DATA CADASTRO</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
<div class="justify-content-center pagination color-black">
   
</div>
    

@endsection
