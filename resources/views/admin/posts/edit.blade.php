@extends('admin.layout.app')
@section('title', 'Editar posts')

@section('content')
    <h1>
        Editar o post {{ $post->title }}
    </h1>

    <div class="w-100 p-12 bg-white mx-auto">
        <form action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data" method="post">

            @method('put')

            @include('admin.posts._partials.form')

        </form>
    </div>

@endsection
