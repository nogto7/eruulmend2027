@extends('layout')
@section('content')

<div class="section_container">
    <div class="section_line">
        <h1 class="title">Мэдээ</h1>
        <div class="news_content">
            @foreach($news as $item)
                <a href="/news/{{ $item->slug }}" class="news_item">
                    <h3>{{ $item->title }}</h3>
                    <em>{{ $item->created_at->format('Y-m-d') }}</em>
                    {{ strip_tags(Str::limit($item->content, 240)) }}
                </a>
            @endforeach
            {{ $news->links() }}
        </div>
    </div>
</div>
@endsection