@extends('admin.layouts.layout')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список новостей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.parser') }}">
                Спарсить новости
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.news.create') }}">
                Добавить новость
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Статус</th>
                    <th>Дата добавления</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($newsList as $news)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->author }}</td>
                        <td>{{ $news->status }}</td>
                        <td>
                            @if ($news->created_at)
                                {{ $news->created_at->format('d-m H:i') }}
                            @endif
                        </td>
                        <td>
                            <x-action route="admin.news" value="{{ $news->id }}" />
                        </td>
                    </tr>
                @empty
                    <p>нет данных</p>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $newsList->links() }}
    </div>
@endsection
