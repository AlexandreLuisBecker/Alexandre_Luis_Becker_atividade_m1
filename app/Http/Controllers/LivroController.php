<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
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
            $livro = Livro ::all();
    
            // debug
            // dd
    
            // abrindo a tela de consulta e enviando os
            // serviços como um parâmetro
            return view('livro.index', compact('livro'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            
               // direcionando para a tela de cadastro
            return view('livro/create');
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
                'nome_livro' => 'required|max:50',
                'nome_original' => 'required|max:50',
                'genero_livro' => 'required|max:50',
                'sinopse_livro' => 'required|max:500',
                'anopub_livro' => 'required|max:9999',
                'editora_livro' =>'required|max:50',

            ]);
         
            $livro = new Livro();
            $livro->nome_livro = $request->nome_livro;
            $livro->nome_original = $request->nome_original;
            $livro->genero_livro = $request->genero_livro;
            $livro->sinopse_livro = $request->sinopse_livro;
            $livro->paginas_livro = $request->paginas_livro;
            $livro->anopub_livro = $request->anopub_livro;
            $livro->editora_livro = $request->editora_livro;
            $livro->save();
    
    
            // redirecionando a página após a gravação
            return redirect('/livro')->with('success', 'Livro cadastrado com sucesso!');
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
            $livro = Livro::findOrFail($id);
    
            return view('livro/edit', compact('livro'));
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
                'nome_livro' => 'required|max:50',
                'nome_original' => 'required|max:50',
                'genero_livro' => 'required|max:50',
                'sinopse_livro' => 'required|max:500',
                'anopub_livro' => 'required|max:9999',
                'editora_livro' =>'required|max:50',

            ]);
    
           Livro::whereId($id)->update($validateData);
    
            return redirect('/livro')->with('success', 'Livro alterado com sucesso!');
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
              $livro = Livro::findOrFail($id);
              $livro->delete();
              return redirect('/livro')->with('success', 'Livro excluído com sucesso!');
        }
    }
    