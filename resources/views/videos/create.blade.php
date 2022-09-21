@extends('layouts.app')

@section('title','ちるび/動画登録ページ')

@section('content')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('videos.title') }}</h2>

                        @include('error.error_card_list')

                        <div class="card-text">
                            <form method="POST" action="{{ route('videos.store') }}">
                                @csrf
                                <div class="form-group col-md-12 text-left">①登録するYouTube動画のURLを入力してください</div>
                                <div class="md-form">
                                    <label for="url">URL</label>
                                    <input class="form-control" type="text" id="url" name="url" required value="{{ old('url') }}">
                                    <span class="text-left">
                                        ※登録したいYouTube動画のURLが https://www.youtube.com/watch?v=PkDfrVdCwCs であれば、
                                        "v="の直後の<small class="text-success">PkDfrVdCwCs</small>を入力してください。(Max:11文字)
                                    </span>
                                </div>
                                <br>
                                <div class="form-group col-md-12 text-left">②登録動画のおすすめの対象を選択してください（※1対象のみ)</div>
                                <br>
                                <div class="form-check-inline">
                                    <label>
                                        <input type="radio" name="target_id" id="1" value="1" checked>&nbsp;幼児
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label>
                                        <input type="radio" name="target_id" id="2" value="2">&nbsp;年少
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label>
                                        <input type="radio" name="target_id" id="3" value="3">&nbsp;年中
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label>
                                        <input type="radio" name="target_id" id="4" value="4">&nbsp;年長
                                    </label>
                                </div>
                                <button class="btn btn-block blue-gradient mt-2 md-2" type="submit">{{ __('auth.submit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('videos.videos',['videos' => $videos])
    </div>


    @include('layouts.footer')
@endsection
