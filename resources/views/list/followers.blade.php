@extends('layout.app')

@section('title', 'ちるび/みんなの動画ページ/フォロワー一覧')

@section('content')
    @include('layout.header')
    <div class="container">
        @include('list.user')
        @include('list.tab', ['hasVideos' => false, 'hasLikes' => false])
        @foreach($followers as $person)
            @include('list.person', ['person' => $person])
        @endforeach
    </div>
    @include('layout.footer')
@endsection
