@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
  <div class="container">
     <h3 class="center">Lista de Produtos</h3>
     <div class="row">
       @if(isset($produtos))
         @foreach($produtos as $produto)
           <div class="col s12 m4">
             <div class="card" style="width: 18rem;">
               <div class="card-body" style="text-align:center">
                 <h5 class="card-title" ><b>{{ $produto->nome }}</b></h5>
                 <p class="card-text">R$ {{ $produto->preco }}</p>
                 <p class="card-text">Quantidade: {{ $produto->quantidade }}</p>
                 <div class="row">
                   <a href="{{ route('admin.produtos.editar', $produto->id) }}" class="btn btn-primary green">Editar</a>
                   <a href="{{ route('admin.produtos.deletar', $produto->id) }}" class="btn btn-secondary red">Deletar</a>
                 </div>
               </div>
             </div>
           </div>
         @endforeach
      @endif
     </div>

  </div>

@endsection
