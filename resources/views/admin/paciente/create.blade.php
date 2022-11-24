@extends('admin.layout.app')
@section('title', 'Criar dados do paciente')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('paciente.store') }}" class="needs-validation" novalidate method="post">

            @include('admin.paciente._partials.form', [
                'titulo_card' => 'Criação do dados do paciente',
            ])

        </form>
    </div>

@endsection
