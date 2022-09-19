<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex flex-row">
            <person-name-chip
                :nickname='@json($user->nickname)'
            >
            </person-name-chip>
            {{-- フォロー/フォロワーボタン --}}
            @if( Auth::id() !== $user['id'] )
                <follow-button
                    class="ml-auto"
                    :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
                    :authorized='@json(Auth::check())'
                    endpoint="{{ route('user.follow', ['nickname' => $user->nickname]) }}"
                >
                </follow-button>
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="card-text">
            <a href="{{ route('list.followings', ['nickname' => $user->nickname]) }}" class="text-muted">
                {{ $user->count_followings }}フォロー
            </a>
            <a href="{{ route('list.followers', ['nickname' => $user->nickname]) }}" class="text-muted">
                {{ $user->count_followers }} フォロワー
            </a>
        </div>
    </div>
</div>
