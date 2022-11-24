@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card border-primary mb-3 rounded">
    <h5 class="card-header">
        {{ isset($titulo_card) ? $titulo_card : '' }}
    </h5>
    <div class="card-body">

        @csrf

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="nome">
                    Nome da especialidade
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" placeholder="Nome da especialidade" class="form-control"
                    value="{{ $especialidade->nome ?? old('nome') }}" name="nome" id="nome" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <button class="btn btn-block btn-primary" type="submit">Enviar informações</button>
        </div>

    </div>
</div>
