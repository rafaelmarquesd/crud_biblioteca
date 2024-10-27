@extends('layouts.public') <!-- Alterar para o layout public -->

@section('content')
    <h1>Adicionar Novo Livro</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        
        <button type="submit" class="btn btn-success mt-3">Salvar</button>
    </form>
    
    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Voltar para a Lista de Livros</a>
@endsection
