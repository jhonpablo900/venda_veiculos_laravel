<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sistema_Vendas;
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
    return view('welcome');
});
Route::get("/formulario",[Sistema_Vendas::class,'cadastrar_form'])->name('formulario.cadastrar_form');
Route::post('/cadastrado',[Sistema_Vendas::class,'db_cadastrado'])->name('cadastrado.db_cadastrado');
Route::get('/ver_dados',[Sistema_Vendas::class,'ver_cadastro'])->name('ver_dados.ver_cadastros');
Route::get('/ver_detalhes/{id}',[Sistema_Vendas::class,'db_detalhes'])->name('ver_detalhes.db_detelhes');
Route::delete('apagar/{id}',[Sistema_Vendas::class,'db_apagar'])->name('apagar.db_apagar');
Route::post('/achado',[Sistema_Vendas::class,'db_busca'])->name('achado.db_busca');
