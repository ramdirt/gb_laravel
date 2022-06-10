@extends('admin.layouts.layout')

@section('content')
    <div class="container w-50 pt-5">
        <h2>Форма редактирования новости</h2>
        <form method="post" action="{{ route('admin.news.update', $news->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id === old('category_id')) selected @endif>
                            {{ $category->title }}</option>
                    @endforeach
                    @error('category_id')
                        <strong style="color:red">{{ $message }}</strong>
                    @enderror
                </select>
            </div>
            <div class="form-group">
                <label for="title">Наименование</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $news->title }}"
                    value="{{ old('title') }}">
                @error('title')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <div class="form-group">
                <label for="author">Автор</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $news->author }}"
                    value="{{ old('author') }}">
                @error('author')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Статус</label>
                <select class="form-control" name="status" id="status">
                    <option @if (old('status') === 'DRAFT') selected @endif value="DRAFT">DRAFT</option>
                    <option @if (old('status') === 'ACTIVE') selected @endif value="ACTIVE">ACTIVE</option>
                    <option @if (old('status') === 'BLOCKED') selected @endif value="BLOCKED">BLOCKED</option>
                </select>

            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror

            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description"
                    id="description">{{ $news->description }}{!! old('description') !!}</textarea>
                @error('description')
                    <strong style="color:red">{{ $message }}</strong>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        console.log('log')
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
