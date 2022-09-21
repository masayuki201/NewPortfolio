@extends('layouts.app')

@section('title', 'ちるび/みんなの動画ページ/フォロー一覧')

@section('content')
    @include('layouts.header')
    <div class="container">
        @include('lists.user')
        @include('lists.tab', ['hasVideos' => false, 'hasLikes' => false])
        @foreach($followings as $person)
            @include('lists.person', ['person' => $person])
        @endforeach
    </div>
    @include('layouts.footer')
@endsection
