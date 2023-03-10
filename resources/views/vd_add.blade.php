@extends('layouts.base')

@section('title','Добавление видеоролика :: Мои видеоролики')

@section('main')
    <form action="{{  route('vd.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Видео</label>
            <input name="title" id="txtTitle" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="txtCategory">Категория</label>
            <input name="category" id="txtCategory" class="form-control">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
@endsection
