<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use Carbon\Carbon;

class PessoaController extends Controller
{
    public function index(){
      
        $pessoas = Pessoa::all();
        return view('pessoas.index',[
            'pessoas' => $pessoas
        ]);

    }
 
    public function create(){
        return view('pessoas.form');
    }

    public function store(PessoaRequest $request){
        $dados = $request->all();
        Pessoa::create($dados);
        return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');

    }

    public function edit($id){
        $pessoa = Pessoa::findorfail($id);
        return view('pessoa.form')->with('noticia', $pessoa);
    }

    public function update($id, PessoaRequest $request)
    {
        $pessoa = Pessoa::findorfail($id);
        $dados = $request->all();
        $pessoa->update($dados);
        
        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::findorfail($id);
        $pessoa->delete();

        return redirect('/pessoas')->with('mensagem', 'Registro excluído com sucesso!');
    }

}
