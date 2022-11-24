@extends('admin.layout.app')
@section('title', 'Editar informações do médico')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('medico.update', $medico->id) }}" method="post">

            @method('put')

            @include('admin.medico._partials.form', [
                'titulo_card' => 'Editar informações do médico ',
                'crm' => 'disabled',
            ])

        </form>
    </div>

@endsection
