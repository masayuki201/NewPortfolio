@extends('layout.app')

@section('title', 'パスワード再設定')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('passwords.set_new_password') }}</h2>

                        @include('error.error_card_list')

                        <div class="card-text">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="email" value="{{ $email }}">
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="md-form">
                                    <label for="password">{{ __('passwords.new_password') }}</label>
                                    <input class="form-control" type="password" id="password" name="password" required>
                                </div>

                                <div class="md-form">
                                    <label for="password_confirmation">{{ __('passwords.new_password_retype') }}</label>
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                                </div>

                                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">{{ __('passwords.submit') }}</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
