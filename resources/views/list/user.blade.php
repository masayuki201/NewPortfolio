<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex flex-row">
            <v-chip
                class="ma-2"
                color="orange"
                text-color="white"
                x-large
            >
                <v-avatar left>
                    <v-icon
                        x-large
                    >
                        mdi-account-circle
                    </v-icon>
                </v-avatar>
                {{ $user->nickname }}
            </v-chip>
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
            <a href="" class="text-muted">
                {{ $user->count_followings }}フォロー
            </a>
            <a href="" class="text-muted">
                {{ $user->count_followers }} フォロワー
            </a>
        </div>
    </div>
</div>

