@extends('admin.layout.app')
@section('title', 'Editar especialidade')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('especialidade.update', $especialidade->id) }}" method="post">

            @method('put')

            @include('admin.especialidade._partials.form', [
                'titulo_card' => 'Editar a especialidade ',
            ])

        </form>
    </div>

@endsection
