@extends('layouts.app')

@section('title')
News
@endsection

@section('content')
@foreach ($news as $news_el)
<a href="{{ route('single_news', $news_el->id) }}" style="text-decoration: none">
    <div class="card mb-3">
        <div class="card-body">
            <h1 class="card-title">{{ $news_el->name }}</h1>
            <img src="{{ $news_el->image }}" alt="" style="width: 100%; height: 300px;">
            <footer class="footer" style="text-align: right;">{{ $news_el->created_at }}</footer>
        </div>
    </div>
</a>
@endforeach
<div>
    {{ $news->links() }}
</div>
@endsection
