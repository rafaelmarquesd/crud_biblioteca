<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Biblioteca') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <!-- Condicional para exibir o botão de Logoff apenas para usuários autenticados -->
        @if(auth()->check())
            <div class="d-flex justify-content-end mt-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logoff</button>
                </form>
            </div>
        @endif

        <!-- Conteúdo principal -->
        <div class="text-center mt-4">
            @yield('content')
        </div>
    </div>
</body>
</html>

