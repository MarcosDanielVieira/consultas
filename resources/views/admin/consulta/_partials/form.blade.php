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

            <div class="col-md-6 mb-3">
                <label for="nome">
                    Nome do médico
                    <span class="text-danger">*</span>
                </label>
                <select class="form-select" id="especialidade" name="medico_id" required>
                    <option value="">Selecione</option>
                    @foreach ($medicos as $item)
                        <option {{ isset($medico) && $medico->id == $item->id ? 'selected' : '' }}
                            value="{{ $item->id }}">
                            {{ $item->nome . ' - ' . $item->especialidade->nome }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Campo não pode ficar sem selecionar!
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nome">
                    Nome do paciente
                    <span class="text-danger">*</span>
                </label>
                <select class="form-select" id="especialidade" name="paciente_id" required>
                    <option value="">Selecione</option>
                    @foreach ($pacientes as $item)
                        <option {{ isset($paciente) && $paciente->id == $item->id ? 'selected' : '' }}
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
                <label for="data_agendamento">
                    Data do agendamento
                    <span class="text-danger">*</span>
                </label>
                <input type="date" min="<?= date('Y-m-d') ?>" max="<?= date('Y-m-d', strtotime('+10 year')) ?>"
                    class="form-control" required name="data_agendamento" id="data_agendamento">
                <div class="invalid-feedback">
                    Campo não pode ficar sem selecionar!
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <label for="hora_agendamento">
                    Hora do agendamento
                    <span class="text-danger">*</span>
                </label>
                <input type="time" class="form-control" required name="hora_agendamento" id="hora_agendamento">
                <div class="invalid-feedback">
                    Campo não pode ficar sem selecionar!
                </div>
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Enviar informações</button>

    </div>
</div>
