@extends('layout')
@section('content')
<div class="section_container">
    <div class="section_line">
        <div class="news_detail">
            <h1 class="title">{{ $news->title }}</h1>
            <div class="news_content">
                <em>{{ $news->created_at->format('Y-m-d') }}</em>
                @if($news->images)
                    @foreach(json_decode($news->images) as $img)
                        <img src="{{ asset('storage/news/' . $img) }}" alt="image">
                    @endforeach
                @endif
                {!! $news->content !!}
            </div>
        </div>
    </div>
@endsection