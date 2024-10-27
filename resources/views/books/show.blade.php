@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Livro</h1>

    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Título:</strong> {{ $book->title }}</p>
    <p><strong>Autor:</strong> {{ $book->author }}</p>
    <p><strong>Descrição:</strong> {{ $book->description }}</p>

    <a href="{{ route('books.index') }}">Voltar para a lista</a>
    <a href="{{ route('books.edit', $book->id) }}">Editar Livro</a>

    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
</div>
@endsection
