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
           @if(isset($produtos))

             @foreach($produtos as $produto)
               <div class="col s12 m4">
                 <div class="card">
                   <div class="card-content">
                     <h4>{{ $produto->nome }}</h4>
                     <p>{{ $produto->preco }}</p>
                     <p>{{ $produto->quantidade }}</p>
                   </div>
                   <div class="card-action">
                     <a href="#">Ver mais</a>
                   </div>
                 </div>
               </div>
             @endforeach
         </div>
           <div class="row" align="center">
             {{$produtos->links()}}
           </div>
           @endif
         </tbody>
       </table>

  </div>
@endsection
