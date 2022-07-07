<footer>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(245, 138, 7)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-light" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-light mr-auto" href="/"><h3>{{ __('layout.title') }}</h3></a>

        {{-- 右寄せメニュー ログインしていない時 --}}
        @guest
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ft-navi" aria-controls="ft-navi" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ft-navi" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-4">
                        <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                            <i class="fa fa-map-pin faa-vertical fa-fw"></i>
                            {{ __('layout.pickup') }}
                        </a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">
                            <i class="fa fa-flag-checkered faa-shake fa-fw"></i>
                            {{ __('layout.ranking') }}
                        </a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link text-light faa-parent  animated-hover" href="/list">
                            <i class="fa fa-smile-beam faa-tada fa-fw"></i>
                            {{ __('layout.list') }}
                        </a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link text-light faa-parent  animated-hover" href="/login">
                            <i class="fa fa-caret-square-right faa-bounce fa-fw"></i>
                            {{ __('layout.video_regist') }}
                        </a>
                    </li>

                    {{-- 右寄せメニュー ログインしていない時 --}}
                    @auth
                    <li class="nav-item mx-4">
                        <a class="nav-link text-light faa-parent  animated-hover" href="/videos/create">
                            <i class="fa fa-caret-square-right faa-bounce fa-fw"></i>
                            {{ __('layout.video_regist') }}
                        </a>
                    </li>
                    @endauth

                </ul>
            </div>
        @endguest

        {{-- 右寄せメニュー ログインしている時--}}
{{--        @auth--}}
{{--            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ft-navi" aria-controls="ft-navi" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="ft-navi" >--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item mx-4">--}}
{{--                        <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">--}}
{{--                            <i class="fa fa-map-pin faa-vertical fa-fw"></i>--}}
{{--                            {{ __('layout.pickup') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mx-4">--}}
{{--                        <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">--}}
{{--                            <i class="fa fa-flag-checkered faa-shake fa-fw"></i>--}}
{{--                            {{ __('layout.ranking') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mx-4">--}}
{{--                        <a class="nav-link text-light faa-parent  animated-hover" href="/list>--}}
{{--                            <i class="fa fa-smile-beam faa-tada fa-fw"></i>--}}
{{--                            {{ __('layout.list') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mx-4">--}}
{{--                        <a class="nav-link text-light faa-parent  animated-hover" href="/videos/create">--}}
{{--                            <i class="fa fa-caret-square-right faa-bounce fa-fw"></i>--}}
{{--                            {{ __('layout.video_regist') }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endauth--}}
    </nav>
</footer>
