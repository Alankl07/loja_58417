@extends('layout.base', ["current"=>"prodegorias"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">prodegoria_id</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $prod)
        <tr>       
            <td>{{$prod->id}}</td>
            <td>{{$prod->nome}}</td>
            <td>{{$prod->descricao}}</td>
            <td>{{$prod->preco}}</td>
            <td>{{$prod->categoria_id}}</td>
            <td>{{$prod->foto}}</td>
            <td>
                <a class = "btn btn-success">Editar</a>
                <a class = "btn btn-danger">Excluir</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection