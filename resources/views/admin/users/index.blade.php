@extends('admin.layouts.layout')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список новостей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
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
                    <th>Имя</th>
                    <th>Роль</th>
                    <th>Дата добавления</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->is_admin }}</td>
                        <td>
                            <x-action route="admin.users" value="{{ $user->id }}" />
                        </td>
                    </tr>
                @empty
                    <p>нет данных</p>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
