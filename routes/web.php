<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;

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

Route::post('/cliente/cadastrar', [LoginController::class, 'cadastrar']);
Route::post('/cliente/login', [LoginController::class, 'autenticar']);
Route::get('/cliente/cadastrar/formulario', [LoginController::class, 'cadastrarFormulario']);
Route::get('/cliente/login/formulario', [LoginController::class, 'loginFormulario']);
Route::get('/', [LojaController::class, 'mostrarTelaInicial']);
Route::get('/cliente/perfil', [LoginController::class, 'verPerfil']);
Route::get('/cliente/sair', [LoginController::class, 'sair']);
Route::get('/cliente/addProdutos', [LojaController::class, 'adicionarProdutos']);
Route::get('/cliente/compras', [LojaController::class, 'verCompras']);
Route::get('/cliente/doacoes', [LojaController::class, 'areaDoacoes']);
