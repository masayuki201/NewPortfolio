@extends('layouts.app')

@section('title', 'ちるび/みんなの動画ページ/登録動画')

@section('content')
    @include('layouts.header')
    <div class="container">
        @include('lists.user')
        @include('lists.tab', ['hasVideos' => true, 'hasLikes' => false])
        @include('videos.videos', ['videos' => $user->videos])
    </div>
    @include('layouts.footer')
@endsection
