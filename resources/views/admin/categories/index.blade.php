@extends('admin.layouts.layout')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Список категорий</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.categories.create') }}">
                    Добавить категорию
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <x-action route="admin.categories" value="{{ $category->id }}" />
                            </td>
                        </tr>
                    @empty
                        <p>нет данных</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
