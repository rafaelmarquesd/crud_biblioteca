@extends('layouts.public') <!-- ou layouts.app, conforme o layout configurado -->

@section('content')

    <h1>Lista de Livros</h1>

    <!-- Formulário de Busca -->
    <form method="GET" action="{{ route('books.index') }}" class="form-inline d-flex justify-content-center mt-4 mb-3">
        <input type="text" name="search" class="form-control w-50 mr-2" placeholder="Digite o título ou autor do livro" value="{{ request('search') }}" required>
        <button type="submit" class="btn btn-primary mr-2">Buscar</button>
        
        <!-- Botão para Voltar à Lista Completa -->
        @if(request('search'))
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar para a Lista Completa</a>
        @endif
    </form>

    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Adicionar Novo Livro</a>

    <!-- Tabela de Listagem de Livros -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center mt-4">
        <div>
            {{ $books->firstItem() }} a {{ $books->lastItem() }} de {{ $books->total() }} resultados
        </div>
        <div>
            {{ $books->links('pagination::bootstrap-4') }}
        </div>
    </div>



    {{ $books->links() }}
@endsection
