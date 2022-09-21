@extends('layouts.app')

@section('title','ちるび/ランキングページ')

@section('content')
    @include('layouts.header')
    @include('rankings.video', [ 'arrayVideo' => $arrayVideo, 'viewCountRanking' => $viewCountRanking])
    @include('layouts.footer')
@endsection
