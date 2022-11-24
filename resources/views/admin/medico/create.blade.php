@extends('admin.layout.app')
@section('title', 'Criar registro')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('medico.store') }}" class="needs-validation" novalidate method="post">

            @include('admin.medico._partials.form', [
                'titulo_card' => 'Criação do dados do médico',
            ])

        </form>
    </div>

@endsection
