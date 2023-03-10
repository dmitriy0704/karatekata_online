@extends('layouts.base')
@section('title', 'Мои видеоролики')
@section('main')
    <p class="text-right"><a href="{{ route('vd.add') }}">Добавить видеоролик</a></p>
    @if(count($vds)>0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Заголовок</th>
                <th>Категория</th>
                <th>Контент</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vds as $vd)
                <tr>
                    <td><h5>{{ $vd->title }}</h5></td>
                    <td><span>{{ $vd->category }}</span></td>
                    <td><span>{{ $vd->content }}</span></td>
                    <td>
                        <a href="">Изменить</a> <br>
                        <a href="">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
