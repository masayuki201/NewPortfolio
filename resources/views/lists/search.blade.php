<div class="container">
    <div class="mt-5 mb-5">
        <h4>{{ __('list.search_title') }}</h4>
    </div>

    {{-- 動画検索フォーム --}}
    <form action="{{ action([\App\Http\Controllers\ListController::class, 'index'])}}" method="get" id="search">
        {{-- カテゴリの選択 --}}
        <div class="row">
            <div class="input-group mt-4 col-md-6 col-xs-12">
                <select type="checkbox" name="select_target_id" class="ml-2"
                        style=" width:50%; text-align-last:center; outline-color: #069b5f; outline-style: auto;">
                    {{-- 画面遷移前に選択したものを初期状態でselectedとする --}}
                    <option value="">{{ __('list.search_all') }}</option>
                    @foreach ($targetGrades as $key => $targetGrade)
                        @if($targetGrade->id == $select_target_id)
                            <option value="{{ $targetGrade->id }}"
                                    selected>{{ $targetGrade->target_grade }}</option>
                        @else
                            <option value="{{ $targetGrade->id }}">{{ $targetGrade->target_grade  }}</option>
                        @endif
                    @endforeach
                </select>

                {{-- 検索ボタン --}}
                <span class="input-group-btn">
                {{ csrf_field() }}
                <input type="submit" class="btn blue-gradient mt-2 mb-2" value="検索">
            </span>
            </div>
        </div>
    </form>
</div>
