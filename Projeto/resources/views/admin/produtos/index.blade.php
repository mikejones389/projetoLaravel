
@extends('layout.site')

@section('titulo', 'Estoque')

@section('conteudo')
<div class="container">
  <div class="center">
    <h3>Gerencie seu estoque</h3>
      <div class="row">
          <div class="input-field col s12 m12">
            <div class="col s4">
              <form class="" action="{{route('admin.produtos.gerenciar')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              <select id="produtos" name= "listaProdutos">
                <option value="" disabled selected>Selecionar Produto</option>
                @foreach($estoque as $produto)
                    <option value={{$produto->id}} >{{$produto->nome}}</option>
                @endforeach
              </select>
            </div>
            <div class="col s4">
              <input name="quantidade" type="text">
              <p>Selecione a quantidade que ira adicionar ou retirar do produto selecionado</p>
            </div>
            <div class"col s4">
              <button class="btn waves-effect green" type="submit" name="action">Submit</button>
            </div>
            </form>
          </div>
      </div>
  </div>
</div>

<div class="container">

   <h4 class="center">Lista de Produtos</h4>
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
          @foreach($estoque as $produto)
          <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>R$ {{ $produto->preco }}</td>
            <td>{{ $produto->quantidade }}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
   </div>
</div>
@endsection
