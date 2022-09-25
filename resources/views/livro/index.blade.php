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
    <a href="livro/create" class="custom-title">Cadastro de Livros</a>
  </li>
  <li>
    <a href="/" class="custom-title">Voltar</a>
  </li>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Nome Original</td>
          <td>Genero</td>
          <td>Sinopse</td>
          <td>Paginas</td>
          <td>Ano Publicação</td>
          <td>Editora</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($livro as $livro )
        <tr>
            <td>{{$livro ->id}}</td>
            <td>{{$livro ->nome_livro}}</td>
            <td>{{$livro ->nome_original}}</td>
            <td>{{$livro ->genero_livro}}</td>
            <td>{{$livro ->sinopse_livro}}</td>
            <td>{{$livro ->paginas_livro}}</td>
            <td>{{$livro ->anopub_livro}}</td>
            <td>{{$livro ->editora_livro}}</td>
            <td><a href="{{ route('livro.edit', $livro ->id)}}" class="btn btn-primary">Editar</a></td>
            <td>
              <form action="{{ route('livro.destroy', $livro->id)}}" method="post">
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