@extends('admin.layout.app')
@section('title', 'Mostrar posts')

@section('content')

    <h1>
        Detalhes do Post {{ $post->title }}
    </h1>

    <ul>
        <li>
            <strong>Titulo: </strong> {{ $post->title }}
        </li>
        <li>
            <strong>Conteúdo: </strong> {{ $post->content }}
        </li>
    </ul>

    <form action="{{ route('post.delete', $post->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar o post {{ $post->title }}</button>
    </form>

@endsection
