@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
<div class="container">

	   <h3 class="center">Lista de Produtos</h3>
     <div class="row">
       <form class="" action="{{route('admin.produtos.salvar')}}" method="post">
         {{csrf_field()}}
         @include('admin.produtos._form')

         <button class="btn green">Salvar</button>
       </form>

     </div>
@endsection
