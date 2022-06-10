@extends('admin.layouts.layout')

@section('content')
    <div class="container w-50 pt-5">
        <h2>Добавить источник для парсинга</h2>
        <form action="{{ route('admin.resources.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label class="form-label">Название</label>
                <input name="url" type="text" class="form-control" value="{{ old('url') }}">

                @error('url')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
