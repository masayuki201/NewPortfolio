@extends('layout.app')

@section('title','ちるび/みんなの動画ページ')

@section('content')
    @include('layout.header')
    {{-- 動画検索 --}}
    <div class="container">
        <div class="mt-5 mb-5">
            <h4>おすすめ検索</h4>
        </div>

        {{-- 動画検索フォーム --}}
        <form action="{{ action([\App\Http\Controllers\ListController::class, 'index'])}}" method="get" id="search">
            {{-- カテゴリの選択 --}}
            <div class="row">
                <div class="input-group mt-4 col-md-6 col-xs-12">
                    <label><h6>おすすめ</h6></label>
                    <select type="number" name="select_target_id" class="ml-2" style=" width:50%; text-align-last:center;">
                        {{-- 画面遷移前に選択したものを初期状態でselectedとする --}}
                        <option value="">全て</option>
                        @foreach ($targetGrades as $key => $targetGrade)
                            @if($targetGrade->id == $select_target_id)
                                <option value="{{ $targetGrade->id }}" selected>{{ $targetGrade->target_grade }}</option>
                            @else
                                <option value="{{ $targetGrade->id }}">{{ $targetGrade->target_grade  }}</option>
                            @endif
                        @endforeach
                    </select>

                    {{-- 検索ボタン --}}
                    <span class="input-group-btn">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-ryb  ml-4" value="検索">
            </span>
                </div>
            </div>
        </form>
    </div>

    {{-- みんなの動画 --}}
    <div class="container">
        <div class="mt-5 mb-5">
            <h4>みんなの動画</h4>
        </div>
        {{-- 表示動画の件数 --}}
        <label class="panel-heading">全 {{ $searches->total() }} 件中 {{ $searches->count() }} 件表示</label>
        <div class="video row mt-5 text-center">
            @foreach ($searches as $key => $search)
                @php
                    $video=$search;
                @endphp
                {{-- 動画を横に3つずつ表示させる --}}
                @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
        </div>
        <div class="row text-center mt-3">
            @endif
            <div class="col-lg-4 mb-5">
                <div class="video text-left d-inline-block">
                    {{-- ニックネーム表示 --}}
                    <name-chip
                        :nickname='@json($search->user['nickname'])'
                    >
                    </name-chip>
                    <div>
                        {{-- 動画を表示 --}}
{{--                    <video-card></video-card>--}}
{{--                        @if($video)--}}
                            <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0" allowfullscreen></iframe>
{{--                        @else--}}
{{--                            <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>--}}
{{--                        @endif--}}

                    </div>
                        {{-- 対象学年表示 --}}
                        <targetgrade-chip
                            :target_grade='@json($search->target['target_grade'])'
                        >
                        </targetgrade-chip>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection

@section('script')
<script>
    import NameChip from "../../js/components/NameChip";
    import VideoCard from "../../js/components/VideoCard";
    import TargetgradeChip from "../../js/components/TargetgradeChip";
    export default {
        components: {
            VideoCard,
            NameChip,
            TargetgradeChip,
        }
    };

</script>
@endsection
