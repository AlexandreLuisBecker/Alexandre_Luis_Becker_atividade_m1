<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
              // direcionando para a tela de consulta

        // criando um objeto para receber os registros
        $autor = Autor::all();

        // debug
        // dd

        // abrindo a tela de consulta e enviando os
        // serviços como um parâmetro
        return view('autor.index', compact('autor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           // direcionando para a tela de cadastro
        return view('autor/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // realizando uma validação nos campos e
        // a gravação dos dados
        $validateData = $request->validate([
            'nome_autor' => 'required|max:50',
            'nacion_autor' => 'required|max:50',
          
        ]);

        $autor = new Autor;
        $autor->nome_autor = $request->nome_autor;
        $autor->nacion_autor = $request->nacion_autor;
        $autor->save();


        // redirecionando a página após a gravação
        return redirect('/autor')->with('success', 'Autor cadastrado com sucesso!');
    }

    /*
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
          // recuperando o registro no banco e enviando
        // para a tela de edição/atualização
        $autor = Autor::findOrFail($id);

        return view('autor/edit', compact('autor'));
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
         // definindo o padrão para a validação dos campos
         $validateData = $request->validate([
            'nome_autor' => 'required|max:50',
            'nacion_autor' => 'required|max:50',
          
        ]);

        Autor::whereId($id)->update($validateData);

        return redirect('/autor')->with('success', 'Autor alterado com sucesso!');
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
          // apagando o registro
          $autor = Autor::findOrFail($id);
          $autor->delete();
          return redirect('/autor')->with('success', 'Autor excluído com sucesso!');
    }
}
