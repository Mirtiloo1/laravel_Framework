@extends('base')

@section('titulo', 'Login')

@section('main')
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<div id="container-user" style="margin-top:8%">
    <div class="cadastro">
        <form action="/login" method="post">
            @csrf
            <h1 class="titulo">Login</h1>
            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="femail" required><br><br>
            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="fsenha" required><br><br>
            <input class="submit" type="submit" value="Entrar">
        </form>
    </div>

    <div id="container-user" style="margin-top: 10px">
        <img src="{{ asset('images/user2.png') }}" height="400px" alt="Login" style="margin-bottom: 10px">
    </div>
</div>
@endsection
