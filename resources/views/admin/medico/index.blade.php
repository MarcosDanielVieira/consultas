@extends('admin.layout.app')
@section('title', 'Listagem médicos')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-primary mb-3">
        <h5 class="card-header">
            Listagem dos médicos
        </h5>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CRM</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Criação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($medicos as $k => $item)
                        <tr>

                            <th class="text-center">{{ $k + 1 }}</th>

                            <td>
                                {{ $item->nome }}
                            </td>

                            <td>
                                {{ $item->crm }}
                            </td>

                            <td>
                                {{ $item->especialidade->nome }}
                            </td>

                            <td>
                                {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                            </td>

                            <td>
                                <a class="btn btn-outline-success" href="{{ route('medico.edit', $item->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

@endsection
