@extends('layouts.app')

@section('title', 'ちるび/みんなの動画ページ/いいね')

@section('content')
    @include('layouts.header')
    <div class="container">
        @include('lists.user')
        @include('lists.tab', ['hasVideos' => false, 'hasLikes' => true])
        @include('videos.videos', ['user' =>$user, 'videos' => $videos])
    </div>
    @include('layouts.footer')
@endsection
