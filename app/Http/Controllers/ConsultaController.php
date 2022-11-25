<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateConsulta;
use App\Models\Consulta;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Função da tela de criar consulta
     */
    public function create()
    {

        $medicos    = Medico::orderBy("nome", "ASC")->get();
        $pacientes  = Paciente::orderBy("nome", "ASC")->get();

        return view("admin.consulta.create", compact("medicos", "pacientes"));
    }

    /**
     * Função para inserir no banco
     */
    public function store(StoreUpdateConsulta $request)
    {
        /**
         * Inserindo tudo do formulário
         */
        $dados = $request->all();

        Consulta::create($dados);

        return redirect()
            ->route("consulta.index")
            ->with("success", "Criado com sucesso!");
    }

    /**
     * Função da tela de listar consulta
     */
    public function index()
    {
        $consultas  = Consulta::with('pacientes', "medicos")
            ->orderBy("data_agendamento", "ASC")->get();

        return view("admin.consulta.index", compact("consultas"));
    }

    /**
     * Função da tela de editar
     */
    public function edit($id)
    {
        if (!$consulta = Consulta::find($id)) {
            return redirect()->back();
        }

        $medicos    = Medico::orderBy("nome", "ASC")->get();
        $pacientes  = Paciente::orderBy("nome", "ASC")->get();

        return view("admin.consulta.edit", compact("consulta", "medicos", "pacientes"));
    }

    /**
     * Função de atuazar informação no banco
     */
    public function update(StoreUpdateConsulta $request, $id)
    {
        if (!$post = Consulta::find($id)) {
            return redirect()->back();
        }

        $dados = $request->all();

        $post->update($dados);

        return redirect()
            ->route("consulta.index")
            ->with("success", "Atualizado com sucesso!");
    }
}
