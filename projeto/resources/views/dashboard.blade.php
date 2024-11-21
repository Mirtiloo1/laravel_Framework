@extends('base')

@section('titulo', 'Dashboard')

@section('main')

<div id="dashboard-container" class="text-center mt-5">
    <h1>Bem-vindo, {{ Auth::user()->nome }}</h1>
    <p>Este é o painel do usuário.</p>
    <a href="/logout" class="btn btn-danger">Sair</a>
</div>

@endsection
