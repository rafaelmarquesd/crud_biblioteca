@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Novo Livro</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>
        </div>
        
        <div>
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" required>
        </div>
        
        <div>
            <label for="description">Descrição:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('books.index') }}">Voltar para a lista</a>
</div>
@endsection
