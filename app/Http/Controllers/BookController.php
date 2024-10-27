<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Exibe a listagem de livros com paginação e busca
    public function index(Request $request)
    {
        $search = $request->input('search');
        $books = Book::where('title', 'like', "%{$search}%")->paginate(10);

        return view('books.index', compact('books', 'search'));
    }

    // Exibe o formulário para criar um novo livro
    public function create()
    {
        return view('books.create');
    }

    // Armazena um novo livro no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    // Exibe um livro específico
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }

    // Exibe o formulário para editar um livro existente
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    // Atualiza os dados de um livro no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
    }

    // Remove um livro do banco de dados
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Livro deletado com sucesso!');
    }
}
