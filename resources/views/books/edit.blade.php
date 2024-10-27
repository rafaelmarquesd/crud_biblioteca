@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Livro</h1>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" required>
        </div>
        
        <div>
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" required>
        </div>
        
        <div>
            <label for="description">Descrição:</label>
            <textarea name="description" id="description">{{ $book->description }}</textarea>
        </div>
        
        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('books.index') }}">Voltar para a lista</a>
</div>
@endsection
