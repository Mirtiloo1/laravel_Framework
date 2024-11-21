@extends('base')

@section('titulo', 'Cadastro - Laravel')

@section('main')

<div id="container-user">
    <div>
    <img src="{{ asset('images/login.png') }}" height="400px" alt="login">
    </div>

    <div class="cadastro">
    <form action="/register" method="post">
        @csrf
        <h1 class="titulo">Cadastro</h1><br>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        Nome<br><input type="text" name="fnome" value="{{ old('fnome') }}"><br><br>
        E-mail<br><input type="email" name="femail" value="{{ old('femail') }}"><br><br>
        Senha<br><input type="password" name="fsenha"><br><br>
        Confirmar Senha<br><input type="password" name="fsenha_confirmation"><br><br>

        <input class="submit" type="submit" value="Cadastrar">
    </form>
    </div>
</div>

@endsection
