<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
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

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobrenos']);

Route::get('/painel', [PainelController::class, 'painel']);


Route::get(
        '/contato/{nome}/{categoria_id}', 
         function(
            string $nome, 
            int $categoria_id
            )  {
    echo 'Seja bem vindo ao site:  '.$nome. '  Categoria:   '.$categoria_id;
})->where('nome','[A-Za-z]+')->where('categoria_id','[0-9]+');




//Route::get('/user/{id}', [UserController::class, 'show']);