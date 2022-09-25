@extends('layouts.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Inclusão de Novos Autores
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('autor.store') }}">
        @csrf  
        <div class="form-group">
              <label for="tipo">Nome do Autor:</label>
              <input type="text" class="form-control" name="nome_autor"/>
          </div>
          <div class="form-group">
            <label for="descricao">País do Autor:</label>
            <input type="text" class="form-control" name="nacion_autor"/>
        </div>
          <button type="submit" class="btn btn-primary">Adicionar Novo Autor</button>
      </form>
  </div>
</div>
@endsection