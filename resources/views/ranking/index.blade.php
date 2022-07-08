@extends('layout.app')

@section('title','ちるび/ランキングページ')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="my-5">
            <h4>{{ __('ranking.title') }}</h4>
        </div>
        <div class="video row mt-5 text-center">
            @foreach ($arrayVideo as $key => $user)
                @php
                    $video = $user;
                @endphp
                {{-- 動画を縦に1つずつ表示させる --}}
        </div>
        <div class="row text-center mt-3">
            <div class="col-sm-12 mb-5">
                <div class="video text-left d-inline-block">
                    {{-- 動画カードを表示 --}}
                    <video-card
                        :nickname='@json($video->user['nickname'])'
                        :url='@json($video['url'])'
                        :target_grade='@json($video->target['target_grade'])'
                        :id='@json($viewCountRanking[$video['id']-1])'
                    >
                    </video-card>
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
        import RankingChip from "../../js/components/RankingChip";

        export default {
            components: {
                NameChip,
                VideoCard,
                TargetgradeChip,
                RankingChip,
            }
        };
    </script>
@endsection
