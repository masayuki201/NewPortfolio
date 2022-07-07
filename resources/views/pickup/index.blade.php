@extends('layout.app')

@section('title','ちるび/ピックアップページ')

@section('content')
    @include('layout.header')
    <div class="container">
        <div class="my-5">
            <h4>{{ __('pickup.title') }}</h4>
        </div>
        <div class="row mt-5 text-center">
            @foreach ($pickup as $key => $user)
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
                    {{-- 動画カードを表示 --}}
                    <video-card
                        :nickname='@json($video->user['nickname'])'
                        :url='@json($video['url'])'
                        :target_grade='@json($video->target['target_grade'])'
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

        export default {
            components: {
                NameChip,
                VideoCard,
                TargetgradeChip,
            }
        };
    </script>
@endsection
