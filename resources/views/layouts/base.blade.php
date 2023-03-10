<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') :: Участники</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <h1 class="base my-3 text-left">КАТА ОНЛАЙН</h1>
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}"
           class="nav-item nav-link">Главная</a>
        <a href="{{ route('register') }}"
           class="nav-item nav-link">Регистрация</a>
        <a href="{{ route('login') }}"
           class="nav-item nav-link">Вход</a>
        <a href="{{ route('home') }}"
           class="nav-item nav-link">Мои Видеоролики</a>

        <form action="{{ route('logout') }}" method="post" class="form-check-inline">
            @csrf
            <input type="submit" class="btn btn-danger" value="Выход">
        </form>

    </nav>

    @yield('main')
</div>
</body>
</html>
