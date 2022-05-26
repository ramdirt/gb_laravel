@extends('admin.layouts.layout')

@section('content')
    <div class="container w-50 pt-5">
        <h2>Форма создания категории</h2>
        <form action="{{ route('admin.news.update', $news->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Название</label>
                <input name="title" type="text" class="form-control" value="{{ $news->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Краткое описание</label>
                <textarea name="description" class="form-control" rows="2">
            {{ $news->description }}
            </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
