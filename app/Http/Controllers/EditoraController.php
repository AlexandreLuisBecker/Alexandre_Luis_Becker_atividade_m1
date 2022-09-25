<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
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
            $editora = Editora::all();
    
            // debug
            // dd
    
            // abrindo a tela de consulta e enviando os
            // serviços como um parâmetro
            return view('editora.index', compact('editora'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            
               // direcionando para a tela de cadastro
            return view('editora/create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $validateData = $request->validate([
                'nome_editora' => 'required|max:50',
                'estado_editora' => 'required|max:50',
              
            ]);
            
            $editora = new Editora();

            $editora->nome_editora = $request->nome_editora;
            $editora->estado_editora = $request->estado_editora;
            $editora->save();
    
    
            // redirecionando a página após a gravação
            return redirect('/editora')->with('success', 'Editora cadastrado com sucesso!');
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
            $editora = Editora::findOrFail($id);
    
            return view('editora/edit', compact('editora'));
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
                'nome_editora' => 'required|max:50',
                'estado_editora' => 'required|max:50',
              
            ]);
    
           Editora::whereId($id)->update($validateData);
    
            return redirect('/editora')->with('success', 'Editora alterado com sucesso!');
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
              $editora = Editora::findOrFail($id);
              $editora->delete();
              return redirect('/editora')->with('success', 'Editora excluído com sucesso!');
        }
    }
    