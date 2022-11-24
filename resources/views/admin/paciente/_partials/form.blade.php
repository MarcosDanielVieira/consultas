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
                    Nome do paciente
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" maxlength="160" placeholder="Nome do paciente" class="form-control"
                    value="{{ $paciente->nome ?? old('nome') }}" name="nome" id="nome" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="email">
                    E-mail do paciente
                    <span class="text-danger">*</span>
                </label>
                <input type="email" minlength="3" maxlength="30" placeholder="E-mail da paciente"
                    class="form-control" value="{{ $paciente->email ?? old('email') }}" name="email" id="email"
                    required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="cpf">
                    CPF
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" maxlength="14" placeholder="CPF" class="form-control cpf"
                    value="{{ $paciente->cpf ?? old('cpf') }}" name="cpf" id="cpf" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="telefone">
                    Telefone
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="11" maxlength="15" placeholder="Telefone" class="form-control telefone"
                    value="{{ $paciente->telefone ?? old('telefone') }}" name="telefone" id="telefone" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="nascimento">
                    Nascimento
                    <span class="text-danger">*</span>
                </label>
                <input type="date" max="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d', strtotime('-100 year')) ?>"
                    class="form-control" value="{{ $paciente->nascimento ?? old('nascimento') }}" name="nascimento"
                    id="nascimento" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label for="cep">
                    CEP
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="9" maxlength="9" placeholder="CEP" class="form-control cep"
                    value="{{ $paciente->cep ?? old('cep') }}" name="cep" id="cep" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="cidade">
                    Cidade
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="2" maxlength="4" placeholder="Cidade" class="form-control"
                    value="{{ $paciente->cidade ?? old('cidade') }}" name="cidade" id="cidade" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label for="uf">
                    UF
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="2" maxlength="4" placeholder="UF" class="form-control"
                    value="{{ $paciente->uf ?? old('uf') }}" name="uf" id="uf" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-5 mb-3">
                <label for="endereco">
                    Endereço
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" maxlength="160" placeholder="Endereço" class="form-control"
                    value="{{ $paciente->endereco ?? old('endereco') }}" name="endereco" id="endereco" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label for="numero">
                    Número
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="1" maxlength="9" placeholder="Número" class="form-control"
                    value="{{ $paciente->numero ?? old('numero') }}" name="numero" id="numero" required>
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

        </div>

        <div class="row divResponsavel" style="display: none">

            <div class="col-md-5 mb-3">
                <label for="nome_responsavel">
                    Nome do responsável
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" maxlength="160" placeholder="Nome do responsável"
                    class="form-control" value="{{ $paciente->nome_responsavel ?? old('nome_responsavel') }}"
                    name="nome_responsavel" id="nome_responsavel">
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="cpf_responsavel">
                    CPF do responsável
                    <span class="text-danger">*</span>
                </label>
                <input type="text" minlength="3" maxlength="14" placeholder="CPF do responsável"
                    class="form-control cpf" value="{{ $paciente->cpf_responsavel ?? old('cpf_responsavel') }}"
                    name="cpf_responsavel" id="cpf_responsavel">
                <div class="invalid-feedback">
                    Campo não pode ficar vazio!
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar informações</button>

    </div>
</div>
