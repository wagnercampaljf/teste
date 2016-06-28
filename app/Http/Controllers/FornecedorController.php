<?php

namespace Teste\Http\Controllers;

use Illuminate\Http\Request;

use Teste\Http\Requests;
use Teste\Models\Fornecedor;

class FornecedorController extends Controller
{

	protected $fornecedor;

	public function __construct(Fornecedor $fornecedor){
		$this->fornecedor = $fornecedor;
	}

    public function getIndex(){
    	$fornecedores = Fornecedor::get();
    	return view('fornecedores.index', compact('fornecedores'));
    }

    public function getAdicionar(){
    	return view('fornecedores.adicionar');
    }

    public function postSalvar(Request $request){
    	$this->validate($request, [
            'nome' => 'required|max:255',
            'cnpj' => 'required|max:20',
            'data_da_empresa' => 'required'
        ]);

        $this->fornecedor->fill($request->all());
        if($this->fornecedor->save()){
            return redirect('/fornecedores');
        }
    }


}
