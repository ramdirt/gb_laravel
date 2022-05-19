@extends('layouts.layout')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Форма запроса получения данных из выбранного источника</h3>
    </div>

    <div class="container mt-5">

        <form method="post" action="{{ route('get_data.store') }}" enctype="multipart/form-data">
            @csrf
            <label>Ваше имя</label>
            <input type="text" name="name" class="form-control mb-2" placeholder="Имя">

            <label>Ваш телефон</label>
            <input type="text" name="phone" class="form-control mb-2" placeholder="Телефон">

            <label>Ваше почта</label>
            <input type="text" name="mail" class="form-control mb-2" placeholder="Почта">

            <label>Что хотите</label>
            <textarea class="form-control mb-2" name="text" rows="3" placeholder="Что хотите получить?"></textarea>

            <button type="submit" class="btn btn-primary">Отправить</button>

        </form>
    </div>
@endsection
