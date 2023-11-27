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
use App\Http\Controllers\ReservaController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('produtos.destroy');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/produtos', [ProductController::class, 'show'])->name('show');
Route::post('/registro-produtos', [ProductController::class, 'store'])->name('store');
Route::post('/cadastrar-usuario', [CadastroController::class, 'cadastrarUsuario']);
Route::post('/reservas', [ReservaController::class, 'fazerReserva'])->name('fazerReserva');

Route::get('/', function () {
    return view('site/index');
});

Route::get('/cardapio', function () {
    return view('site/cardapio');
});

Route::get('/Reserva', function () {
    return view('site/reservas');
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

Route::get('/produto', [ProductController::class, 'index'])->name('index');

Route::get('/registro-produtos', function () {
    return view('site/admin/cadastro-produto');
});


