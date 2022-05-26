@extends('layouts.layout')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Форма обратной связи</h3>
    </div>

    <div class="container mt-5">
        <form method="post" action="{{ route('feedback') }}" enctype="multipart/form-data">
            @csrf
            <label>Ваше имя</label>
            <input type="text" name="name" class="form-control mb-2" placeholder="Введите имя" value="{{ old('name') }}">
            <label>Отзыв</label>
            <textarea name="feedback" placeholder="Ваш отзыв" class="form-control mb-2" rows="3"
                value="{{ old('feedback') }}"></textarea>
            <button type="submit class=" btn btn-primary">Отправить</button>

        </form>
    </div>
@endsection
