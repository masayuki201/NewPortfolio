@extends('layout.app')

@section('title','ちるび/新規登録ページ')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('auth.register') }}</h2>

{{--                        <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">--}}
                            <i class="fab fa-google mr-1"></i>{{ __('auth.goto_google') }}
                        </a>

                        @include('error.error_card_list')

                        <div class="card-text">

                            <form method="POST" action="{{ route('signup.post') }}">
                                @csrf
                                <div class="md-form">
                                    <label for="nickname">{{ __('auth.nickname') }}</label>
                                    <input class="form-control" type="text" id="nickname" name="nickname" required value="{{ old('nickname') }}">
                                    <small>{{ __('auth.nickname.attention') }}</small>
                                </div>
                                <div class="md-form">
                                    <label for="email">{{ __('auth.email') }}</label>
                                    <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                                </div>
                                <div class="md-form">
                                    <label for="password">{{ __('auth.password') }}</label>
                                    <input class="form-control" type="password" id="password" name="password" required>
                                </div>
                                <div class="md-form">
                                    <label for="password">{{ __('auth.password_verification') }}</label>
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                <button class="btn btn-block blue-gradient mt-2 md-2" type="submit">{{ __('auth.submit') }}</button>
                            </form>

                            <div class="mt-0">
                                <a href="{{ route('login') }}" class="card-text">{{ __('auth.goto_login') }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
