@extends('admin.layouts.layout')

@section('content')
    <div class="container w-50 pt-5">
        <h2>Форма создания категории</h2>
        <form action="{{ route('admin.categories.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label class="form-label">Название</label>
                <input name="title" type="text" class="form-control" value="{{ old('title') }}">

                @error('title')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Краткое описание</label>
                <textarea name="description" class="form-control" rows="2">{{ old('description') }}</textarea>

                @error('description')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
