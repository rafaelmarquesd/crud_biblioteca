@extends('layouts.public') <!-- Alterar para o layout public -->

@section('content')
    <h1>Detalhes do Livro</h1>

    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title"><strong>Título:</strong> {{ $book->title }}</h4>
            <p class="card-text"><strong>Autor:</strong> {{ $book->author }}</p>
            <p class="card-text"><strong>Descrição:</strong> {{ $book->description }}</p>
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Voltar para a Lista de Livros</a>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning mt-3">Editar Livro</a>
@endsection
