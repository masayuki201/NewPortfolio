@extends('layout.app')

@section('title','ちるび/動画登録ページ')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">動画登録</h2>

{{--                        <span class="text-success">①登録したいYouTube動画のURLを入力してね♪</span>--}}
{{--                        <br>例）登録したいYouTube動画のURLが https://www.youtube.com/watch?v=PkDfrVdCwCs なら--}}
{{--                        <br>"v="の直後にある<span class="text-success">PkDfrVdCwCs</span>を入力してね♪<span class="text-success">（※11ケタまでだよ）</span>--}}



                        @include('error.error_card_list')

                        <span class="card-text">

                            <form method="POST" action="{{ route('videos.store') }}">
                                @csrf
                                <span class="form-group col-md-12">
                                <span class="text-success">①登録するYouTube動画のURLを入力してください</span>
                                <div class="md-form">
                                    <label for="url">URL</label>
                                    <input class="form-control" type="text" id="url" name="url" required value="{{ old('url') }}">
                                    <small>例）登録したいYouTube動画のURLが https://www.youtube.com/watch?v=PkDfrVdCwCs であれば、
                                        "v="の直後のPkDfrVdCwCsを入力してください。（※Max:11ケタ）</small>
                                </div>
                                <br>
                                <div class="form-group col-md-12">②登録動画のおすすめの対象を選択してください♪（※1対象のみ)</div>
                                <br>
                                <div class="form-check-inline">
                                    <label>
                                        <input type="checkbox" name="target_id" id="1" value="1" checked>&nbsp;幼児
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label>
                                        <input type="checkbox" name="target_id" id="2" value="2">&nbsp;年少
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label>
                                        <input type="checkbox" name="target_id" id="3" value="3">&nbsp;年中
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label>
                                        <input type="checkbox" name="target_id" id="4" value="4">&nbsp;年長
                                    </label>
                                </div>
                                </span>
{{--                                <div class="md-form">--}}
{{--                                    <label for="email">{{ __('auth.email') }}</label>--}}
{{--                                    <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">--}}
{{--                                </div>--}}
{{--                                <div class="md-form">--}}
{{--                                    <label for="password">{{ __('auth.password') }}</label>--}}
{{--                                    <input class="form-control" type="password" id="password" name="password" required>--}}
{{--                                </div>--}}
{{--                                <div class="md-form">--}}
{{--                                    <label for="password">{{ __('auth.password_verification') }}</label>--}}
{{--                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>--}}
{{--                                </div>--}}
                                <button class="btn btn-block blue-gradient mt-2 md-2" type="submit">{{ __('auth.submit') }}</button>
                            </form>

{{--                            <div class="mt-0">--}}
{{--                                <a href="{{ route('login') }}" class="card-text">{{ __('auth.goto_login') }}</a>--}}
{{--                            </div>--}}
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
