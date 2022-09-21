@extends('layouts.app')

@section('title','ちるび/ピックアップページ')

@section('content')
    @include('layouts.header')
    @include('pickups.video', ['pickup' => $pickup])
    @include('layouts.footer')
@endsection
