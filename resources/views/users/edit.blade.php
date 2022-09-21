@extends('layouts.app')

@section('title','ちるび/マイページ編集')

@section('content')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">{{ __('users.title2') }}</h2>

                        @include('error.error_card_list')

                        <form action="{{ route('user.update', [Auth::user()->id]) }}" method="post">
                            <div class="card-text">
                                @csrf
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">

                                <div class="md-form">
                                    <label for="nickname">{{ __('users.nickname') }}</label>
                                    <input class="form-control" type="text" id="nickname" value="{{Auth::user()->nickname}}" name="nickname">
                                </div>

                                <div class="md-form">
                                    <label for="email">{{ __('users.email') }}</label>
                                    <input class="form-control" type="text" id="email" value="{{Auth::user()->email}}" name="email">
                                </div>
                                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">{{ __('users.edit') }}</button>

                            </div>
                        </form>

                        <form action="{{ route('user.destroy', [Auth::user()->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-block young-passion-gradient mt-2 mb-2 text-white" type="submit">{{ __('users.remove') }}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layouts.footer')
@endsection
