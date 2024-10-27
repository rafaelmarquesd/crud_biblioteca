@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Livros</h1>

    <form method="GET" action="{{ route('books.index') }}">
        <input type="text" name="search" placeholder="Buscar pelo título" value="{{ request()->search }}">
        <button type="submit">Buscar</button>
    </form>

    <a href="{{ route('books.create') }}">Adicionar Novo Livro</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}">Ver</a>
                    <a href="{{ route('books.edit', $book->id) }}">Editar</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $books->links() }}
</div>
@endsection
