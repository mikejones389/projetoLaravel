

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/produtos',['as'=>'admin.produtos','uses'=>'App\Http\Controllers\Admin\ProdutoController@index']);
Route::get('/admin/produtos/adicionar',['as'=>'admin.produtos.adicionar','uses'=>'App\Http\Controllers\Admin\ProdutoController@adicionar']);
Route::post('/admin/produtos/salvar',['as'=>'admin.produtos.salvar','uses'=>'App\Http\Controllers\Admin\ProdutoController@salvar']);
Route::get('/admin/produtos/editar/{id}',['as'=>'admin.produtos.editar','uses'=>'App\Http\Controllers\Admin\ProdutoController@editar']);
Route::put('/admin/produtos/atualizar/{id}',['as'=>'admin.produtos.atualizar', 'uses'=>'App\Http\Controllers\Admin\ProdutoController@atualizar']);
Route::get('/admin/produtos/deletar/{id}',['as'=>'admin.produtos.deletar', 'uses'=>'App\Http\Controllers\Admin\ProdutoController@deletar']);
Route::get('/admin/produtos/estoque',['as'=>'admin.produtos.estoque','uses'=>'App\Http\Controllers\Admin\ProdutoController@gerenciarEstoque']);
Route::post('/admin/produtos/gerenciar',['as'=>'admin.produtos.gerenciar','uses'=>'App\Http\Controllers\Admin\ProdutoController@gerenciar']);
