@extends('admin.layout.app')
@section('title', 'Editar informações da consulta')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('consulta.update', $consulta->id) }}" method="post">

            @method('put')

            @include('admin.consulta._partials.form', [
                'titulo_card' => 'Editar informações da consulta ',
            ])

        </form>
    </div>

@endsection
