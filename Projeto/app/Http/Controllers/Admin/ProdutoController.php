<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
      $produtos = Produto::all();
      return view('home',compact('produtos'));
    }

    public function adicionar(){
      return view('admin.produtos.adicionar');
    }

    public function salvar(Request $req){
      $dados = $req->all();
      Produto::create($dados);
      return redirect()->route('admin.produtos');
    }

    public function editar($id){
      $produto = Produto::find($id);
      return view('admin.produtos.editar', compact('produto'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();
      if(isset($dados['quantidade'])){
        $dados['quantidade'] = '1';
      }
      else {
        $dados['quantidade'] = '0';
      }

      Produto::find($id)->update($dados);

      return redirect()->route('admin.produtos');
    }

    public function deletar($id){
      Produto::find($id)->delete();
      return redirect()->route('admin.produtos');
    }

    public function gerenciarEstoque(){
      $estoque = Produto::all();
      return view('admin.produtos.index', compact('estoque'));
    }
    public function gerenciar(Request $req){
      var_dump($_POST['listaProdutos']);
      var_dump($_POST['quantidade']);
    }
}
