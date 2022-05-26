@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1>Приветствие</h1>
        <a href="{{ route('news') }}">Все новости</a>
        <a href="{{ route('news.categories') }}">Все категории</a><br />
        <a href="{{ route('feedback') }}">Форма обратной связи</a><br />
        <a href="{{ route('order') }}">Форма запроса на данные</a>
    </div>
@endsection
