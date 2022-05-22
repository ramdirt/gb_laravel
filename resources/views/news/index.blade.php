@extends('layouts.layout')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse($newsList as $news)
            <div class="col">
            <div class="card shadow-sm">
                <img src="{{ $news->image }}" alt="">
                    <div class="card-body">
                    <p><a href="{{ route('news.show', ['id' => $news->id])}}"> {{ $news->title }}</a><br></p>
                    <p class="card-text">{{ $news->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">9 mins</small>
                    <small class="text-muted">{{$news->author}}</small>
                    </div>
                </div>
            </div>
            </div>

        @empty
            <p>Нет новостей</p>
        @endforelse
        </div>
    </div>
</div>
@endsection
</main>