<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::orderBy("id", "DESC")->paginate(2);
        $posts = Post::latest()->paginate(2);

        return view("admin.posts.index", compact("posts"));
    }

    public function create()
    {
        return view("admin.posts.create");
    }

    public function store(StoreUpdatePost $request)
    {
        // Pegando um valor específico
        // $request->tile; 

        /**
         * Inserindo tudo do formulário
         */
        $dados              = $request->all();

        if ($request->image->isValid()) {

            // Colocando nome na imagem=
            // $nameFile       = Str::of($request->title)->slug("_") . "." .  $request->image->getClientOriginalExtension();
            // $file           = $request->image->storeAs('posts', $nameFile);

            $file           = $request->image->store('posts');
            $dados['image'] = $file;
        }

        Post::create($dados);

        return redirect()
            ->route("post.index")
            ->with("message", "Criado com sucesso!");
    }

    public function show($id)
    {
        // $post = Post::where("id", $id)->first();    
        if (!$post = Post::find($id)) {
            return redirect()->route("post.index");
        }

        return view("admin.posts.show", compact("post"));
    }

    public function delete($id)
    {
        if (!$post = Post::find($id))
            return redirect()->route("post.index");

        if (Storage::exists($post->image))
            Storage::delete($post->image);

        $post->delete();
        return redirect()
            ->route("post.index")
            ->with("message", "Deletado com sucesso!");
    }

    public function edit($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        return view("admin.posts.edit", compact("post"));
    }

    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        $dados              = $request->all();

        if ($request->image && $request->image->isValid()) {

            if (Storage::exists($post->image))
                Storage::delete($post->image);

            // Colocando nome na imagem=
            // $nameFile       = Str::of($request->title)->slug("_") . "." .  $request->image->getClientOriginalExtension();
            // $file           = $request->image->storeAs('posts', $nameFile);

            $file           = $request->image->store('posts');
            $dados['image'] = $file;
        }

        $post->update($dados);

        return redirect()
            ->route("post.index")
            ->with("message", "Atualizado com sucesso!");
    }

    public function search(Request $request)
    {
        $filters    = $request->except("_token");

        $posts      = Post::where("title", "LIKE", "%{$request->search}%")
            ->orWhere("content", "LIKE", "%{$request->search}%")
            ->paginate(1);

        return view("admin.posts.index", compact("posts", "filters"));
    }
}
