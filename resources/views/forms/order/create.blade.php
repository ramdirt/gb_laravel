@extends('layouts.layout')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Форма запроса получения данных из выбранного источника</h3>
    </div>

    <div class="container mt-5">

        <form method="post" action="{{ route('order.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Ваше имя</label>
                <input type="text" name="name" class="form-control mb-2" placeholder="Имя" value="{{ old('name') }}">
                @error('name')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <div class="form-group">
                <label>Ваш телефон</label>
                <input type="text" name="phone" class="form-control mb-2" placeholder="Телефон" value="{{ old('phone') }}">

                @error('phone')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <div class="form-group">

                <label>Ваше почта</label>
                <input type="text" name="email" class="form-control mb-2" placeholder="Почта" value="{{ old('email') }}">

                @error('email')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror

            </div>
            <div class="form-group">
                <label>Что хотите</label>
                <textarea class="form-control mb-2" name="order" rows="3"
                    placeholder="Что хотите получить?">{{ old('order') }}</textarea>

                @error('order')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Отправить</button>

        </form>
    </div>
@endsection
