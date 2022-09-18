@extends('layout.app')

@section('title', 'ちるび/みんなの動画ページ/いいね')

@section('content')
    @include('layout.header')
    <div class="container">
        @include('list.user')
        @include('list.tab', ['hasVideos' => false, 'hasLikes' => true])
        @include('videos.videos', ['user' =>$user, 'videos' => $videos,])
    </div>
    @include('layout.footer')
@endsection
