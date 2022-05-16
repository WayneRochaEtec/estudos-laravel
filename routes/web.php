<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use Symfony\Component\HttpFoundation\Request;

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
    return view('cadastrar');
});

Route::post('/form/cadastrar',function(Request $request){
    //dd($request->all());

    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "Produto criado com sucesso!";
});

Route::get('/listar/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('listar', ['produto' => $produto]);
});

Route::get('/editar/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/form/editar/{id}',function(Request $request, $id){
    //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "Produto editado com sucesso!";
});

Route::get('/excluir/{id}',function($id){
    //dd($request->all());
    $produto = Produto::find($id);
    $produto->delete();

    echo "Produto excluido com sucesso!";
});