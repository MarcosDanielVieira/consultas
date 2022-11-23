@extends('admin.layout.app')
@section('title', 'Listagem especialidade')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h1>
        Especialidade
    </h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Criação</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($especialidades as $k => $item)
                <tr>

                    <th scope="row">{{ $k + 1 }}</th>

                    <td>
                        {{ $item->nome }}
                    </td>

                    <td>
                        {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                    </td>

                    <td>
                        <a class="btn btn-outline-success" href="{{ route('especialidade.edit', $item->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

@endsection
