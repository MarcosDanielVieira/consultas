@extends('admin.layout.app')
@section('title', 'Listagem dos posts')

@section('content')
    <a href="{{ route('post.index') }}">
        Página de início
    </a>

    |

    <a href="{{ route('post.create') }}">
        Página de criar Posts
    </a>

    <hr />

    @if (session('message'))
        <div class="alert alert-warning" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-center uppercase font-black my-4">
        Listagem Posts
    </h1>

    <form action="{{ route('posts.search') }}" class="form-inline mb-2" method="post">
        @csrf
        <input type="text" name="search" class="form-control" placeholder="Pesquisa">
        <button class="btn btn-primary ml-2" type="submit">Filtrar</button>
    </form>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th class="text-center" scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>

            @foreach ($posts as $k => $item)
                <tr>

                    <th scope="row">{{ $k + 1 }}</th>

                    <td>
                        <img class="rounded mx-auto d-block" src="{{ url("storage/{$item->image}") }}"
                            style="max-width:100px" alt="{{ $item->title }}">
                    </td>

                    <td>
                        {{ $item->title }}
                    </td>

                    <td>
                        <a class="btn btn-outline-primary" href="{{ route('post.show', $item->id) }}">Ver</a>
                        <a class="btn btn-outline-success" href="{{ route('post.edit', $item->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

    <hr />

    @if (isset($filters))
        {{ $posts->appends($filters)->links() }}
    @else
        {{ $posts->links() }}
    @endif
@endsection
