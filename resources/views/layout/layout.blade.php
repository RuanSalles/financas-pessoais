<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand link-light fw-bold" href=""><i class="fa-solid fa-coins"></i> Financas Pessoais</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-light p-2" id="navbarNavAltMarkup">
                <div>
                <a href="" class="link-light text-decoration-none me-3 fw-bold">Finanças</a>
                <a href="" class="link-light text-decoration-none me-3 fw-bold">Pessoas</a>
                <a href="" class="link-light text-decoration-none me-3 fw-bold">Depósito</a>
                <a href="" class="link-light text-decoration-none me-3 fw-bold">Saque</a>
                <a href="" class="link-light text-decoration-none me-3 fw-bold">Cotações</a>
                </div>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
