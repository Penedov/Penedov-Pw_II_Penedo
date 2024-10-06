<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;



class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::all(); //all é o método para executar "select * from nomeDaTabela"
        
        //nome da view      //atributo $contatos sem $
        return view('produto',compact('produto'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ligando a model ao control para receber o forms, e retornando ao banco
        $produto = new Produto();

        $produto->nome= $request->txtnome;
        $produto->quantidade= $request->numquantidade;
        $produto->categoria= $request->txtcategoria;
        $produto->valor= $request->numvalor;
        $produto->marca= $request->txtmarca;
        $produto->datafabricacao= $request->datefabricacao;
        
        $produto ->save();

        return redirect('/produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
