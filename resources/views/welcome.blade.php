@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
    <h1>Приветствие</h1>
    <a href="{{route('news')}}">Все новости</a>
    <a href="{{route('news.categories')}}">Все категории</a>
    </div>
@endsection