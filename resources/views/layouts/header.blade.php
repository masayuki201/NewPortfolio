<header>
    {{-- サイトロゴ --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(255, 255, 255)">
        <a class="navbar-brand text-dark" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-dark mr-auto" href="/"><span class="h1">{{ __('layout.title') }}</h6><h6>{{ __('layout.version') }}</h6></span></a>

        {{-- 1段目右寄せメニュー ログインしている場合 ニックネームを表示する--}}
        @auth
            <div class="site-description ml-auto">
                <name-chip
                    :nickname='@json(Auth::user()->nickname)'
                >
                </name-chip>
            </div>
        @endauth
    </nav>

    {{-- 2段左寄せメニュー --}}
    <nav class="navbar navbar-expand-xl navbar-dark purple-gradient">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navi"
                aria-controls="bs-navi" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="bs-navi">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                        <i class="fa fa-map-pin faa-vertical fa-fw"></i>
                        <span class="h6">{{ __('layout.pickup') }}</span>
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">
                        <i class="fa fa-flag-checkered faa-shake fa-fw"></i>
                        <span class="h6">{{ __('layout.ranking') }}</span>
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/list">
                        <i class="fa fa-smile-beam faa-tada fa-fw"></i>
                        <span class="h6">{{ __('layout.list') }}</span>
                    </a>
                </li>
            </ul>

            @guest
            {{-- 2段右寄せメニュー--}}
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/signup">
                        <i class="fa fa-user faa-flash"></i>
                        <span class="h6">{{ __('layout.register') }}</span>
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/login">
                        <i class="fa fa-door-open faa-ring"></i>
                        <span class="h6">{{ __('layout.login') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
        @endguest

            {{-- 2段左寄せメニュー--}}
                @auth
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/videos/create">
                        <i class="fa fa-caret-square-right faa-bounce fa-fw"></i>
                        <span class="h6">{{ __('layout.video_regist') }}</span>
                    </a>
                </li>

            {{-- 2段右寄せメニュー ログインしている場合 --}}
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/user/{{Auth::id()}}">
                        <i class="fa fa-user faa-flash"></i>
                        <span class="h6">{{ __('layout.mypage') }}</span>
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/logout">
                        <i class="fa fa-door-open faa-ring"></i>
                        <span class="h6">{{ __('layout.logout') }}</span>
                    </a>
                </li>
            </ul>
    </nav>
    @endauth
</header>
<script>
    import NameChip from "../../js/components/NameChip";
    export default {
        components: {NameChip}
    }
</script>
