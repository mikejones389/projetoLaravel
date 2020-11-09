@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
  <div class="container">
	   <h3 class="center">Editando Produto</h3>
     <div class="row">
       <form class="" action="{{route('admin.produtos.atualizar', $produto->id)}}" method="post" enctype="multipart/form-data">
         {{ csrf_field()}}
         <input type="hidden" name="_method" value="put">
         @include('admin.produtos._form');

         <button class="btn green">Atualizar</button>
     </div>

  </div>

@endsection
