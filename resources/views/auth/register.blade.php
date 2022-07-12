@extends('layout.app')

@section('title','ちるび/新規登録ページ')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('register.title') }}</h2>

{{--                        <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">--}}
                            <i class="fab fa-google mr-1"></i>{{ __('register.google_button') }}
                        </a>


                        <div class="card-text">

                            <form method="POST" action="{{ route('signup.post') }}">
                                @csrf
                                <div class="md-form">
                                    <label for="nickname">{{ __('register.nickname') }}</label>
                                    <input class="form-control" type="text" id="nickname" name="nickname" required value="{{ old('nickname') }}">
                                    <small>{{ __('register.nickname.attention') }}</small>
                                </div>
                                <div class="md-form">
                                    <label for="email">{{ __('register.email') }}</label>
                                    <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                                </div>
                                <div class="md-form">
                                    <label for="password">{{ __('register.password') }}</label>
                                    <input class="form-control" type="password" id="password" name="password" required>
                                </div>
                                <div class="md-form">
                                    <label for="password">{{ __('register.password_verification') }}</label>
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                <button class="btn btn-block blue-gradient mt-2 md-2" type="submit">{{ __('register.submit') }}</button>
                            </form>


{{--                            <div class="mt-0">--}}
{{--                                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>--}}
{{--                            </div>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    @include('layout.footer')
@endsection
