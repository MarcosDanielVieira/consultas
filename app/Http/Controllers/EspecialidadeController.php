<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use App\Http\Requests\StoreUpdateEspecialidade;

use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Função da tela de criar especialidade
     */
    public function create()
    {
        return view("admin.especialidade.create");
    }

    /**
     * Função para inserir no banco
     */
    public function store(StoreUpdateEspecialidade $request)
    {
        /**
         * Inserindo tudo do formulário
         */
        $dados = $request->all();

        Especialidade::create($dados);

        return redirect()
            ->route("especialidade.index")
            ->with("success", "Criado com sucesso!");
    }

    /**
     * Função da tela de listar especialidade
     */
    public function index()
    {
        $especialidades = Especialidade::orderBy("nome", "ASC")->get();

        return view("admin.especialidade.index", compact("especialidades"));
    }

    /**
     * Função da tela de editar
     */
    public function edit($id)
    {
        if (!$especialidade = Especialidade::find($id)) {
            return redirect()->back();
        }

        return view("admin.especialidade.edit", compact("especialidade"));
    }

    /**
     * Função de atuazar informação no banco
     */
    public function update(StoreUpdateEspecialidade $request, $id)
    {
        if (!$post = Especialidade::find($id)) {
            return redirect()->back();
        }

        $dados = $request->all();

        $post->update($dados);

        return redirect()
            ->route("especialidade.index")
            ->with("success", "Atualizado com sucesso!");
    }
}
