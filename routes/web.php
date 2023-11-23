<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::post('/produtos', [ProdutoController::class, 'show']);
Route::post('/cadastrar-usuario', [CadastroController::class, 'cadastrarUsuario']);

Route::get('/', function () {
    return view('site/index');
});

Route::get('/cardapio', function () {
    return view('site/cardapio');
});

Route::get('/login', function () {
    return view('site/login');
});

Route::get('/registro', function () {
    return view('site/registro');
});

Route::get('/admin', function () {
    return view('site/admin/admin');
});

Route::get('/produto', function () {
    return view('site/admin/produtos');
});

Route::get('/registro-produtos', function () {
    return view('site/admin/cadastro-produto');
});

Route::get('/editar-produtos', function () {
    return view('site/admin/editar-produtos');
});
