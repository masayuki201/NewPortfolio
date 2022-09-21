@extends('layouts.app')

@section('title', 'パスワード再設定')

@section('content')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('auth.password_reset') }}</h2>

                        @include('error.error_card_list')

                        @if (session('status'))
                            <div class="card-text alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card-text">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="md-form">
                                    <label for="email">{{ __('auth.email') }}</label>
                                    <input class="form-control" type="text" id="email" name="email" required>
                                </div>

                                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">{{ __('auth.send_email') }}</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
