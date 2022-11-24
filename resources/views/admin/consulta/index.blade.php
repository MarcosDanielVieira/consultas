@extends('admin.layout.app')
@section('title', 'Listagem das consultas')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-primary mb-3">
        <h5 class="card-header">
            Listagem das consultas
        </h5>
        <div class="card-body table-responsive">

            <table id="example" class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Médico</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Data e horário da consulta</th>
                        <th scope="col">Criação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($consultas as $k => $item)
                        <tr>

                            <th class="text-center">{{ $k + 1 }}</th>

                            <td>
                                {{ $item->medicos->nome }}
                            </td>

                            <td>
                                {{ $item->pacientes->nome }}
                            </td>

                            <td>
                                {{ date('d/m/Y', strtotime($item->data_agendamento)) . ' ' . date('H:i:s', strtotime($item->hora_agendamento)) }}
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