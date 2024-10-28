
@extends('layouts.public') <!-- Utiliza o layout padrao -->

<!-- Conteudo principal -->
@section('content')
    <h1>Bem-vindo à Biblioteca</h1>
    <p>Para acessar a biblioteca, faça login ou registre-se.</p>
    <a href="{{ route('login') }}" class="btn btn-primary m-2">Login</a>
    <a href="{{ route('register') }}" class="btn btn-success m-2">Registrar</a>
@endsection



