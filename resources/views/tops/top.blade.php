@extends('layouts.app')

@section('title','ちるび/topページ')

@section('content')
    @include('layouts.header')
    {{-- "junbotron" 背景画を入れる--}}
    <div class="jumbotron jumbotron-extend">
        <div class="container-fluid jumbotron-container">
            <div class="text-left text-light">
                <span class="h1">さぁ みんなで作ろう<br>楽しい動画を共有しよう</span>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
