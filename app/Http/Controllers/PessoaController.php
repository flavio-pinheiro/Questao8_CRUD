<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PessoaStoreRequest;
use App\Http\Requests\PessoaUpdateRequest;

class PessoaController extends Controller
{
    public function index()
    {
		$pessoas = Pessoa::all();
        
		return view('index', ['pessoas' => $pessoas]);
    }

    public function create()
    {
		return view('pessoas.create');
    }

    public function store(PessoaStoreRequest $request){
    	$pessoa = new Pessoa; 

    	$pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
    	$pessoa->email = $request->email;
    	$pessoa->data_nasc = $request->data_nasc;
    	$pessoa->nacionalidade = $request->nacionalidade;   
        $pessoa->telefones = $request->telefones;

    	$pessoa->save();

    	return redirect('/');
    }
    
    public function show($id){
        $pessoa = Pessoa::findOrFail($id);
        $separa = explode(' ', $pessoa->data_nasc);
        $pessoa->data_nasc = $separa[0];

        return view('pessoas.show', ['pessoa'=>$pessoa]);
    }

    public function destroy($id){
        Pessoa::findOrFail($id)->delete();

        return redirect('/');
    }

    public function update(PessoaUpdateRequest $request){ 
        Pessoa::findOrFail($request->id)->update($request->all());
        
        return redirect('pessoas/'.$request->id);
    }

}
