<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Все участники</title>
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
    @extends('layouts.base')
    @section('title','Главная')
@section('main')
        <h2 class="my-3 text-center">Все учстники</h2>
    @if (count($vds) > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Участник</th>
                    <th>Видео</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($vds as $vd)
                    <tr>
                        <td><h3>{{ $vd->title }}</h3></td>
                        <td>
                            <p>{{ $vd->content }}</p>
                            <p><a href="/{{ $vd->id }}/">Подробнее...</a></p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    @endsection
</div>
</body>
</html>
