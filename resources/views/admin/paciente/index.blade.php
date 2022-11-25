@extends('admin.layout.app')
@section('title', 'Listagem pacientes')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-primary mb-3">
        <h5 class="card-header">
            Listagem dos pacientes
        </h5>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Número</th>
                        <th scope="col">UF</th>
                        <th scope="col">Criação</th>
                        <th scope="col" class="text-center">Ação</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($pacientes as $k => $item)
                        <tr>

                            <th class="text-center">{{ $k + 1 }}</th>

                            <td>
                                {{ $item->nome }}
                            </td>

                            <td>
                                {{ $item->cpf }}
                            </td>

                            <td>
                                {{ $item->endereco }}
                            </td>

                            <td class="text-center">
                                {{ $item->numero }}
                            </td>

                            <td>
                                {{ $item->uf }}
                            </td>

                            <td>
                                {{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}
                            </td>

                            <td class="text-center">

                                <a class="btn btn-sm m-1 btn-outline-success" title="Editar"
                                    href="{{ route('paciente.edit', $item->id) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('paciente.delete', $item->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm m-1 btn-outline-danger" title="Excluir" type="submit">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

@endsection
