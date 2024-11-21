@extends('base')

@section('titulo', 'Laravel')

@section('main')

<div id="container-user">
        <div>
            <img src="https://static.vecteezy.com/system/resources/previews/003/689/228/non_2x/online-registration-or-sign-up-login-for-account-on-smartphone-app-user-interface-with-secure-password-mobile-application-for-ui-web-banner-access-cartoon-people-illustration-vector.jpg" height="400px" alt="">
        </div>
        <form action="/atualizar/{{$user->id}}" method="post">
            <h1 class="titulo">Cadastro</h1><br><br>

            @csrf
            @method('put')
            Nome<br><input type="text" name="fnome" value="{{$user->nome}}"><br><br>
            E-mail<br><input type="email" name="femail" value="{{$user->email}}"><br><br>
            <input class="submit" type="submit" value="Atualizar">
            
        </form>
    </div>

@endsection
