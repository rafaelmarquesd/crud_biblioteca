<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; // Utilizando as rotas do BookController


// Rota principal - exibe a tela inicial com login e registro para visitantes
Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest');

// Redireciona usuários autenticados diretamente para a lista de livros
Route::get('/books', [BookController::class, 'index'])->name('books.index')->middleware('auth');

// O comando Route::resource('books', BookController::class) gera automaticamente 
// todas as rotas CRUD necessárias para gerenciar o recurso 'books', protegidas pelo middleware 'auth'
Route::resource('books', BookController::class)->middleware('auth');

// Rotas de autenticação geradas pelo Breeze (login, registro, etc.)
require __DIR__.'/auth.php';
