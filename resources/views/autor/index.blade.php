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
    <a href="autor/create" class="custom-title">Cadastro de Autores</a>
  </li>
  <li>
    <a href="/" class="custom-title">Voltar</a>
  </li>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome do Autor</td>
          <td>País do Autor</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($autor as $autor)
        <tr>
            <td>{{$autor->id}}</td>
            <td>{{$autor->nome_autor}}</td>
            <td>{{$autor->nacion_autor}}</td>
            <td><a href="{{ route('autor.edit', $autor->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('autor.destroy', $autor->id)}}" method="post">
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