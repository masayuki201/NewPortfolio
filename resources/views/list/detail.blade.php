@extends('layout.app')

@section('title', 'ちるび/みんなの動画ページ/登録動画')

@section('content')
    @include('layout.header')
    <div class="container">
        @include('list.user')
        @include('list.tab', ['hasVideos' => true, 'hasLikes' => false])
        @include('videos.videos', ['videos' => $user->videos])
    </div>
    @include('layout.footer')
@endsection
