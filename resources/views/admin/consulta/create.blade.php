@extends('admin.layout.app')
@section('title', 'Criar consulta')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('consulta.store') }}" class="needs-validation" novalidate method="post">

            @include('admin.consulta._partials.form', [
                'titulo_card' => 'Criação da consulta',
            ])

        </form>
    </div>

@endsection
