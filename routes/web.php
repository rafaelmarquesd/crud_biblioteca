<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; // Importa o controlador de livros

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

// Rota principal, redireciona para a lista de livros como página inicial
Route::get('/', [BookController::class, 'index'])->name('home');

// Rotas CRUD para o recurso de livros
Route::resource('books', BookController::class);

/*
|---------------------------------------------------------------------------
| Explicação das Rotas do Resource 'books'
|---------------------------------------------------------------------------
|
| O comando Route::resource('books', BookController::class) gera automaticamente
| todas as rotas CRUD necessárias para gerenciar o recurso 'books'.
| Abaixo estão os detalhes de cada rota gerada:
|
| - GET      /books              -> index   (lista todos os livros)
| - GET      /books/create       -> create  (mostra o formulário para adicionar um novo livro)
| - POST     /books              -> store   (salva o novo livro no banco de dados)
| - GET      /books/{id}         -> show    (exibe os detalhes de um livro específico)
| - GET      /books/{id}/edit    -> edit    (mostra o formulário para editar um livro existente)
| - PUT/PATCH /books/{id}        -> update  (atualiza os dados do livro no banco de dados)
| - DELETE   /books/{id}         -> destroy (deleta o livro do banco de dados)
|
| Essas rotas correspondem aos métodos do controlador BookController, que
| gerencia as operações CRUD para o recurso 'books'.
|
*/



