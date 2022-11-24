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

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="nome">
                    Nome do médico
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" placeholder="Nome do médico" class="form-control"
                    value="{{ $medico->nome ?? old('nome') }}" name="nome" id="nome" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="nome">
                    Especialidade
                    <span class="text-danger">*</span>
                </label>
                <select class="form-select" id="especialidade" name="especialidade_id" required>
                    <option value="">Selecione</option>
                    @foreach ($especialidades as $item)
                        <option {{ isset($medico) && $medico->especialidade_id == $item->id ? 'selected' : '' }}
                            value="{{ $item->id }}">
                            {{ $item->nome }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Campo não pode ficar sem selecionar!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="crm">
                    CRM do médico
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" maxlength="20" placeholder="CRM do médico" class="form-control"
                    value="{{ $medico->crm ?? old('crm') }}" name="crm" id="crm" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Enviar informações</button>

    </div>
</div>
