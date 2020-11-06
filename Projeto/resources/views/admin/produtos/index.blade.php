@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
<div class="container">

	   <h3 class="center">Lista de Produtos</h3>
     <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
          </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->nome }}</td>
              <td>{{ $registro->preco }}</td>
              <td>{{ $registro->quantidade }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.produtos.editar', $registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.produtos.deletar', $registro->id) }}">Deletar</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
     </div>
     <div class="row">
       <a class="btn blue" href="{{ route('admin.produtos.adicionar') }}">Adicionar</a>
  </div>
@endsection
