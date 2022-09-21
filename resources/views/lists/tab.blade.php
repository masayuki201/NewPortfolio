<div class="container">
    <ul class="nav nav-tabs nav-justified mt-3">
        <li class="nav-item">
            <a class="nav-link text-muted {{ $hasVideos ? 'active' : '' }}"
               href="{{ route('list.detail', ['nickname' => $user->nickname]) }}">
                <h2 class="h3 card-title text-muted mt-2">{{ __('videos.registration') }}</h2>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted {{ $hasLikes ? 'active' : '' }}"
               href="{{ route('list.likes', ['nickname' => $user->nickname]) }}">
                <h2 class="h3 card-title text-muted mt-2">{{ __('videos.likes') }}</h2>
            </a>
        </li>
    </ul>
</div>

