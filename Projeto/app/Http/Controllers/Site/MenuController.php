<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;

class MenuController extends Controller
{
    public function index(){
      $produtos = Produto::all();
      return view('home',compact('produtos'));
    }
}
