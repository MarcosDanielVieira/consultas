@extends('admin.layout.app')
@section('title', 'Editar informações do paciente')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('paciente.update', $paciente->id) }}" method="post">

            @method('put')

            @include('admin.paciente._partials.form', [
                'titulo_card' => 'Editar informações do paciente ',
            ])

        </form>
    </div>

@endsection
