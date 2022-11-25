<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePaciente;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Função da tela de criar paciente
     */
    public function create()
    {
        $pacientes = Paciente::orderBy("nome", "ASC")->get();

        return view("admin.paciente.create", compact("pacientes"));
    }


    /**
     * Função da tela de listar paciente
     */
    public function index()
    {
        $pacientes = Paciente::orderBy("nome", "ASC")->get();

        return view("admin.paciente.index", compact("pacientes"));
    }

    /**
     * Função para inserir no banco
     */
    public function store(StoreUpdatePaciente $request)
    {
        /**
         * Inserindo tudo do formulário
         */
        $dados = $request->all();

        Paciente::create($dados);

        return redirect()
            ->route("paciente.index")
            ->with("success", "Criado com sucesso!");
    }

    /**
     * Função da tela de editar
     */
    public function edit($id)
    {
        if (!$paciente = Paciente::find($id)) {
            return redirect()->back();
        }

        return view("admin.paciente.edit", compact("paciente"));
    }

    /**
     * Função de atuazar informação no banco
     */
    public function update(StoreUpdatePaciente $request, $id)
    {
        if (!$paciente  = Paciente::find($id)) {
            return redirect()->back();
        }

        $dados      = $request->all();

        $paciente->update($dados);

        return redirect()
            ->route("paciente.index")
            ->with("success", "Atualizado com sucesso!");
    }

    /**
     * Função para deletar item
     */
    public function delete($id)
    {
        if (!$paciente = Paciente::find($id))
            return redirect()->route("paciente.index");

        $paciente->delete();
        return redirect()
            ->route("paciente.index")
            ->with("success", "Deletado com sucesso!");
    }
}
