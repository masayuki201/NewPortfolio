{{--@extends('layout.app')--}}

{{--@section('title','ちるび/登録情報修正ページ')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="text-center my-5">--}}
{{--            <h4>登録情報修正</h4>--}}
{{--        </div>--}}
{{--        <form action="{{ route('user.update', [Auth::user()->id]) }}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="id" value="{{Auth::user()->id}}">--}}
{{--            <div class="form-group row">--}}
{{--                <label class="col-12 col-form-label col-sm-5 col-form-label text-sm-right">ニックネーム</label>--}}
{{--                <input type="text" name="nickname" value="{{ Auth::user()->nickname }}" class="col-sm-4 col-8">--}}
{{--            </div>--}}
{{--            <div class="form-group row">--}}
{{--                <label class="col-12 col-form-label col-sm-5 col-form-label text-sm-right">メールアドレス</label>--}}
{{--                <input type="text" name="email" value="{{ Auth::user()->email }}" class="col-sm-4 col-8">--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">--}}
{{--                <input class="btn btn-primary" type="submit" value="修正">--}}
{{--        </form>--}}

{{--        <form action="{{ route('user.destroy', [Auth::user()->id]) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <input class="btn btn-pink" type="submit" value="退会">--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layout.app')

@section('title','ちるび/マイページ')

@section('content')
    @include('layout.header')
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

                                {{--                            <a href="/user/{{Auth::id()}}/edit" class="btn btn-block blue-gradient mt-2 mb-2">{{ __('users.edit_remove') }}</a>--}}


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
    @include('layout.footer')
@endsection
