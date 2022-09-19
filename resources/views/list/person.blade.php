<div class="card mt-3">
    <div class="card-body">
        <div class="d-flex flex-row">
            <person-name-chip
                :nickname='@json($person->nickname)'
            >
            </person-name-chip>
            {{-- フォロー/フォロワーボタン --}}
            @if( Auth::id() !== $person->id )
                <follow-button
                    class="ml-auto"
                    :initial-is-followed-by='@json($person->isFollowedBy(Auth::user()))'
                    :authorized='@json(Auth::check())'
                    endpoint="{{ route('user.follow', ['nickname' => $person->nickname]) }}"
                >
                </follow-button>
            @endif
        </div>
    </div>
</div>
