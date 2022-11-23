@extends('admin.layout.app')
@section('title', 'Criar especialidade')

@section('content')

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('especialidade.store') }}" class="needs-validation" novalidate method="post">

            @include('admin.especialidade._partials.form', [
                'titulo_card' => 'Criação de especialidade',
            ])

        </form>
    </div>

@endsection
