@extends('layouts.app')

@section('title','ちるび/みんなの動画ページ')

@section('content')
    @include('layouts.header')
    {{-- 動画検索 --}}
    @include('lists.search', ['targetGrades' => $targetGrades])

    {{-- みんなの動画 --}}
    <div class="container">
        <div class="mt-5 mb-5">
            <h4>{{ __('list.title') }}</h4>
        </div>
        {{-- 表示動画の件数 --}}
        <label class="panel-heading">全 {{ $searches->total() }} 件中 {{ $searches->count() }} 件表示</label>
        <div class="video row mt-5 text-center">
            @foreach ($searches as $key => $search)
                @php
                    $video = $search;
                @endphp
                {{-- 動画を横に3つずつ表示させる --}}
                @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
        </div>
        <div class="row text-center mt-3">
            @endif
            <div class="col-lg-4 mb-5">
                <div class="video text-left d-inline-block">
                    <div>
                        {{-- 動画カードを表示 --}}
                        <video-card
                            :nickname='@json($search->user['nickname'])'
                            :url='@json($video['url'])'
                            :target_grade='@json($search->target['target_grade'])'
                        >
                        </video-card>
                        {{-- いいね!を表示 --}}
                        @csrf
                        @method('put')
                        <div class="card-body pt-0 pb-2 pl-3">
                            <div class="card-text">
                                <video-like
                                    :initial-is-liked-by='@json($video->isLikedBy(Auth::user()))'
                                    :initial-count-likes='@json($video->count_likes)'
                                    :authorized='@json(Auth::check())'
                                    endpoint="{{ route('videos.like', ['video'=>$video]) }}"
                                >
                                </video-like>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
@endsection
