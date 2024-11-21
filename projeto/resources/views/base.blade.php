<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel Framework</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/usuarios">Usuários</a>
                    </li>
                </ul>
            </div>
            <div class="ms-auto">
                @if(Auth::check())
                    <a href="/logout" class="btn btn-danger">Sair</a>
                @else
                    <a href="/login" class="btn btn-dark" style="background-color: #65968A; color: white; border: none;">Entrar</a>
                @endif
            </div>
        </div>
    </nav>

    <main>
        @yield('main')
    </main>

    <footer>
        <div class="text-center p-3">
            © 2024 Copyright:
            <a style="text-decoration:none;">Murilo Nunes Pimentel</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qC+4I6NgjQ9twkga7DzzjBj0aVHIhbGqYNkHBbAlTfbV99iRFyQ6wNer3QcvhiG7" crossorigin="anonymous"></script>
</body>
</html>
