@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card border-primary mb-3">
    <h5 class="card-header">
        {{ isset($titulo_card) ? $titulo_card : '' }}
    </h5>
    <div class="card-body">


        @csrf

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="nome">Nome da especialidade</label>
                <input type="text" minlength="3" placeholder="Nome da especialidade" class="form-control"
                    value="{{ $especialidade->nome ?? old('nome') }}" name="nome" id="nome" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('especialidade.index') }}" class="btn btn-block btn-secondary">
                    Voltar
                </a>
            </div>
            <div class="col-md-6">
                <button class="btn btn-block btn-primary" type="submit">Enviar</button>
            </div>
        </div>

    </div>
</div>
