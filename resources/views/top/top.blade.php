@extends('layout.app')

@section('title','ちるび/topページ')

@section('content')
    @include('layout.header')
    {{-- "junbotron" 背景画を入れる--}}
    <div class="jumbotron jumbotron-extend">
        <div class="container-fluid jumbotron-container">
            <div class="text-left text-light">
                <h1>さぁ みんなで作ろう<br>楽しい動画を共有しよう</h1>
            </div>
        </div>
    </div>
@endsection
