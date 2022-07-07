@extends('layout.app')

@section('title','ちるび/みんなの動画ページ')

@section('content')
    @include('layout.header')
    {{-- 動画検索 --}}
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
                <input type="submit" class="btn btn-ryb  ml-4" value="検索">
            </span>
                </div>
            </div>
        </form>
    </div>

    {{-- みんなの動画 --}}
    <div class="container">
        <div class="mt-5 mb-5">
            <h4>{{ __('list.title') }}</h4>
        </div>
        {{-- 表示動画の件数 --}}
        <label class="panel-heading">全 {{ $searches->total() }} 件中 {{ $searches->count() }} 件表示</label>
        <div class="video row mt-5 text-center">
            @foreach ($searches as $key => $search)
                @php
                    $video = $search;
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
                            :nickname='@json($search->user['nickname'])'
                            :url='@json($video['url'])'
                            :target_grade='@json($search->target['target_grade'])'
                        >
                        </video-card>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('layout.footer')
@endsection

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
