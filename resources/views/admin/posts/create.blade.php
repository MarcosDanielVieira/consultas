@extends('admin.layout.app')
@section('title', 'Criar posts')

@section('content')

    <h1 class="text-center uppercase font-black my-4">
        Create
    </h1>

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="post">

            @include('admin.posts._partials.form')

        </form>
    </div>

@endsection
