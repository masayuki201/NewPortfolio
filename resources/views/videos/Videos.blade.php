<div class="container">
    <ul class="nav nav-tabs nav-justified mt-3">
        <li class="nav-item">
            <a class="nav-link text-muted active"
               href="{{ route('list.detail', ['nickname' => $user->nickname]) }}">
                <h2 class="h3 card-title text-muted mt-2">{{ __('videos.registration') }}</h2>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted"
               href="{{ route('list.likes', ['nickname' => $user->nickname]) }}">
                <h2 class="h3 card-title text-muted mt-2">{{ __('videos.likes') }}</h2>
            </a>
        </li>
    </ul>

    <div class="video row mt-5 text-center">
        @foreach ($videos as $key => $user)
            @php
                $video = $user;
            @endphp
            {{-- 動画を横に3つずつ表示させる --}}
            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
    </div>
    <div class="row text-center mt-3">
        @endif
        <div class="col-lg-4 mb-5">
            <div class="video text-left d-inline-block">
                <div>
                    {{-- 動画カードを表示 --}}
                    <video-card
                        :nickname='@json($video->user['nickname'])'
                        :url='@json($video['url'])'
                        :target_grade='@json($video->target['target_grade'])'
                    >
                    </video-card>
                    {{-- いいね!を表示 --}}
                    @csrf
                    @method('put')
                    <div class="card-body pt-0 pb-2 pl-3">
                        <div class="card-text">
                            <video-like
                                :initial-is-liked-by='@json($video->isLikedBy(Auth::user()))'
                                :initial-count-likes='@json($video->count_likes)'
                                :authorized='@json(Auth::check())'
                                endpoint="{{ route('videos.like', ['video'=>$video]) }}"
                            >
                            </video-like>
                        </div>
                    </div>


                    {{-- 登録動画/削除ボタン --}}
                    @if(Auth::id() == $video->user_id)
                        <form method="POST" action="{{ route('videos.destroy', [$video->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-block btn-danger text-white mt-2 md-2" type="submit">{{ __('auth.delete') }}</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@section('script')
    <script>
        import NameChip from "../../js/components/NameChip";
        import VideoCard from "../../js/components/VideoCard";
        import TargetgradeChip from "../../js/components/TargetgradeChip";

        export default {
            components: {
                NameChip,
                VideoCard,
                TargetgradeChip,
            }
        };
    </script>
@endsection
