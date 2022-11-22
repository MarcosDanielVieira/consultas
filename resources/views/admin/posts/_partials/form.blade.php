    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    <div class="card border-primary mb-3">
        <div class="card-body">

            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
                    Imagem
                </label>
                <div class="col-sm-6">
                    <input type="file" id="colFormLabelSm" name="image">
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label col-form-label-sm">
                    Título
                </label>
                <div class="col-sm-6">
                    <input id="title" type="text" class="form-control" name="title" id="title"
                        value="{{ $post->title ?? old('title') }}" placeholder="Título">
                </div>
            </div>

            <div class="form-group row">
                <label for="content" class="col-sm-2 col-form-label col-form-label-sm">
                    Conteúdo
                </label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ $post->content ?? old('content') }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('post.index') }}" class="btn btn-light">
                        Voltar
                    </a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>
