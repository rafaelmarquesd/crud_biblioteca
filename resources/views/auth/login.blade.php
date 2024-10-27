<!-- resources/views/auth/login.blade.php -->
@extends('layouts.public')

@section('content')
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input id="email" type="email" class="form-control" name="email" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
@endsection
