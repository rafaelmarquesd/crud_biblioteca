<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui você pode registrar rotas para seu aplicativo. Essas rotas são
| carregadas pelo RouteServiceProvider dentro de um grupo de rotas
| que contém o middleware "web".
|
*/

// Rota principal - exibe a tela inicial com login e registro para visitantes
Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest');

// Redireciona usuários autenticados diretamente para a lista de livros
Route::get('/books', [BookController::class, 'index'])->name('books.index')->middleware('auth');

// Rotas CRUD para o recurso de livros, protegidas pelo middleware 'auth'
Route::resource('books', BookController::class)->middleware('auth');

// Rota provisoria
Route::get('/profile', function () {
    return redirect('/books');
})->name('profile.edit');

// Rotas de autenticação geradas pelo Breeze (login, registro, etc.)
require __DIR__.'/auth.php';
