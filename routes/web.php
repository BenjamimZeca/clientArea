<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacturaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//rota de teste do dashboard


Route::get('/', function () {
    return view('autenticacao.login');
});

//rotas de autenticacao
Route::get('autenticacao.login', [AuthController::class, 'index'])->name('autenticacao.login');
Route::post('autenticacao.postlogin', [AuthController::class, 'postlogin'])->name('autenticacao.postlogin');
Route::get('autenticacao.logout', [AuthController::class, 'logout'])->name('autenticacao.logout');
Route::post('autenticacao.registo', [AuthController::class, 'registo'])->name('autenticacao.registo');
Route::get('autenticacao.registo', [AuthController::class, 'mostrarformularioregistro'])->name('autenticacao.formularioregisto');

/*bara de menu*/
Route::get('cliente.painel-principal', [AuthController::class, 'dashboard'])->name('welcome');
Route::get('cliente.facturacao', [FacturaController::class, 'factura'])->name('cliente.facturacao');
Route::get('cliente.perfil', [UserController::class, 'perfil'])->name('cliente.perfil');
Route::get('cliente.cliente', [UserController::class, 'cliente'])->name('cliente.cliente');
Route::post('cliente.criar-factura', [FacturaController::class, 'criar'])->name('cliente.criar-factura');
//rotas de utilizador
