<?php

namespace Teste\Http\Controllers;

use Illuminate\Http\Request;

use Teste\Http\Requests;
use Teste\Models\Produto;
use Teste\Models\Fornecedor;

class ProdutoController extends Controller
{
    protected $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $produtos = Produto::get();
       	return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate(){
    	$fornecedores = Fornecedor::get()->lists('nome', 'id');
        return view('produtos.create', compact('fornecedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request){
        $this->validate($request, [
            'nome' => 'required|max:255',
            'preco' => 'required',
            'tipo' => 'required',
            'fornecedor_id' => 'required'
        ]);

        $produto->fill($request->all());
        if($produto->save()){
            return redirect('/produtos');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id){
        $produto = $this->produto->find($id);
        $fornecedores = Fornecedor::get();
        return view ('produtos.create', compact('fornecedores', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id){
        $this->validate($request, [
            'nome' => 'required|max:255',
            'preco' => 'required',
            'tipo' => 'required',
            'fornecedor_id' => 'required'
        ]);

        $this->produto->fill($request->all());
        if($this->produto->save()){
            return redirect('/produtos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id){
        $produto = $this->produto->find($id);
        $produto->delete();

        return redirect('/produtos');
    }
}
