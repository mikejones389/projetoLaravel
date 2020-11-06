<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
      $registros = Produto::all();
      return view('admin.produtos.index',compact('registros'));
    }
}
