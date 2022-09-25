@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <li>
    <a href="editora/create" class="custom-title">Cadastro de Editoras</a>
  </li>
  <li>
    <a href="/" class="custom-title">Voltar</a>
  </li>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome Editora</td>
          <td>Estado Editora</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($editora as $editora)
        <tr>
            <td>{{$editora->id}}</td>
            <td>{{$editora->nome_editora}}</td>
            <td>{{$editora->estado_editora}}</td>
         
            <td><a href="{{ route('editora.edit', $editora->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('editora.destroy', $editora->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection