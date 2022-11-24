@extends('admin.layout.app')
@section('title', 'Editar informações da consulta')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('medico.update', $medico->id) }}" method="post">

            @method('put')

            @include('admin.medico._partials.form', [
                'titulo_card' => 'Editar informações da consulta ',
                'crm' => 'disabled',
            ])

        </form>
    </div>

@endsection
