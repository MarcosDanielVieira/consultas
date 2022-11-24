@extends('admin.layout.app')
@section('title', 'Listagem das especialidades')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-primary mb-3">
        <h5 class="card-header">
            Listagem das especialidades
        </h5>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Criação</th>
                        <th scope="col" class="text-center">Ação</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($especialidades as $k => $item)
                        <tr <?= $item->id == 1 ? 'style="pointer-events: none"' : '' ?>>

                            <th class="text-center">{{ $k + 1 }}</th>

                            <td>
                                {{ $item->nome }}
                            </td>

                            <td>
                                {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                            </td>

                            <td class="text-center">
                                <a class="btn btn-outline-success" <?= $item->id == 1 ? 'disabled' : '' ?>
                                    href="{{ route('especialidade.edit', $item->id) }}" s>Editar</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

@endsection
