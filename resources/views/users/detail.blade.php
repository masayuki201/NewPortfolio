@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('users.title') }}</h2>

                        @include('error.error_card_list')
                        <div class="card-text">
                                @csrf
                                <div class="md-form">
                                    <label for="nickname">{{ __('users.id') }}</label>
                                    <input class="form-control" type="text" id="id" value="{{Auth::user()->id}}" name="id" disabled>
                                </div>

                                <div class="md-form">
                                    <label for="nickname">{{ __('users.nickname') }}</label>
                                    <input class="form-control" type="text" id="nickname" value="{{Auth::user()->nickname}}" name="nickname" disabled>
                                </div>

                                <div class="md-form">
                                    <label for="email">{{ __('users.email') }}</label>
                                    <input class="form-control" type="text" id="email" value="{{Auth::user()->email}}" name="email" disabled>
                                </div>

                                <a href="/user/{{Auth::id()}}/edit" class="btn btn-block blue-gradient mt-2 mb-2">{{ __('users.edit_remove') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection
