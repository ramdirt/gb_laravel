@extends('admin.layouts.layout')

@section('content')
    <div class="container w-50 pt-5">
        <h2>Форма создания категории</h2>
        <form action="{{ route('admin.resources.update', $resource->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Название</label>
                <input name="url" type="text" class="form-control" value="{{ $resource->url }}{{ old('url') }}"
                    @error('url') <strong style="color:red">{{ $message }}</strong> @enderror </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
