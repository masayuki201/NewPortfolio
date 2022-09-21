@extends('layouts.app')

@section('title','ちるび/Google新規登録ページ')

@section('content')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('auth.register') }}</h2>

                        @include('error.error_card_list')

                        <div class="card-text">
                            <form method="POST"
                                  action="{{ route('register.{provider}', ['provider' => $provider]) }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="md-form">
                                    <label for="nickname">{{ __('auth.nickname') }}</label>
                                    <input class="form-control" type="text" id="nickname" name="nickname" required>
                                    <small>{{ __('auth.nickname.attention') }}</small>
                                </div>
                                <div class="md-form">
                                    <label for="email">{{ __('auth.email') }}</label>
                                    <input class="form-control" type="text" id="email" name="email" value="{{ $email }}" disabled>
                                </div>
                                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">{{ __('auth.register') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
