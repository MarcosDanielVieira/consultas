<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateMedico;
use App\Models\Especialidade;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Função da tela de criar médico
     */
    public function create()
    {
        $especialidades = Especialidade::orderBy("nome", "ASC")->get();

        return view("admin.medico.create", compact("especialidades"));
    }

    /**
     * Função para inserir no banco
     */
    public function store(StoreUpdateMedico $request)
    {
        /**
         * Inserindo tudo do formulário
         */
        $dados = $request->all();

        Medico::create($dados);

        return redirect()
            ->route("medico.index")
            ->with("success", "Criado com sucesso!");
    }

    /**
     * Função da tela de listar médico
     */
    public function index()
    {
        $medicos = Medico::with('especialidade')->orderBy("nome", "ASC")->get();

        return view("admin.medico.index", compact("medicos"));
    }

    /**
     * Função da tela de editar
     */
    public function edit($id)
    {
        if (!$medico = Medico::find($id)) {
            return redirect()->back();
        }

        $especialidades = Especialidade::orderBy("nome", "ASC")->get();

        return view("admin.medico.edit", compact("medico", "especialidades"));
    }

    /**
     * Função de atuazar informação no banco
     */
    public function update(StoreUpdateMedico $request, $id)
    {
        if (!$medico  = Medico::find($id)) {
            return redirect()->back();
        }

        $dados      = $request->all();

        $medico->update($dados);

        return redirect()
            ->route("medico.index")
            ->with("success", "Atualizado com sucesso!");
    }

    /**
     * Função para deletar item
     */
    public function delete($id)
    {
        if (!$medico = Medico::find($id))
            return redirect()->route("medico.index");

        $medico->delete();
        return redirect()
            ->route("medico.index")
            ->with("success", "Deletado com sucesso!");
    }
}
