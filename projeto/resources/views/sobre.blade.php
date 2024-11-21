@extends('base')
@section('titulo', 'Sobre')

@section('main')
    <h2>{{ $nm }} requer</h2>

    @if ($nm == "Laravel")
        <ul>
            <li>PHP</li>
            <li>Composer</li>
        </ul>
    @else
        <p>Laravel não encontrado!</p>
    @endif

    <br><hr><br>

    <h3>Por que o Laravel?</h3>
    <ol>
        @for ($i = 0; $i <= 2; $i++)
            <li>{{ $vtg[$i] }}</li>
        @endfor
    </ol>

    <br><hr><br>

    <h3>Arquitetura MVC</h3>
    <ul>
        @foreach ($pd as $dados)
            <li>{{ $dados }}</li>
        @endforeach
    </ul>
@endsection
