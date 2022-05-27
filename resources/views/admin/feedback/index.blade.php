@extends('admin.layouts.layout')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Список отзывов</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Имя</th>
                        <th>Сообщение</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($feedbackList as $feedback)
                        <tr>
                            <td>{{ $feedback->id }}</td>
                            <td>{{ $feedback->name }}</td>
                            <td>{{ $feedback->feedback }}</td>
                            <td>
                                <x-action route="admin.feedback" value="{{ $feedback->id }}" />
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
