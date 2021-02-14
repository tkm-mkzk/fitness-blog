@extends('layouts.app')

@section('content')

<h1 class="header-margin page-heading text-center">投稿一覧</h1>

@foreach ($items as $item)
    <div class='container'>
        <div class="blog">
            <hr>
            <div class="text-center"><p>{{ $item['title'] }}</p></div>
            @if (isset($item['file_path']))
            <img class="img-fluid" src="{{asset('storage/' . $item['file_path'])}}" alt="{{asset('storage/' . $item['file_path'])}}">
            @endif
            <div class="text-center"><p>{!! nl2br(preg_replace('/(https?:\/\/[^\s]*)/', '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>', $item['content'])) !!}</p></div>
            <div class="text-center"><a href="{{route('detail', ['content_id' => $item['id']])}}">詳細</a></div>
        </div>
    </div>
@endforeach

@endsection
