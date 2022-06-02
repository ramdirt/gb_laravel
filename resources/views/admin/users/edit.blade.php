@extends('admin.layouts.layout')

@section('content')
    <div class="container w-50 pt-5">
        <h2>Форма редактирования пользователя</h2>
        <form method="post" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}"
                    value="{{ old('name') }}">
                @error('name')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>


            <div class="form-group">
                <label for="is_admin">Роль</label>
                <select class="form-control" name="is_admin" id="is_admin">
                    <option @if (old('is_admin') === '0') selected @endif value="0">Обычный пользователь</option>
                    <option @if (old('is_admin') === '1') selected @endif value="1">Администратор</option>
                </select>

            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
