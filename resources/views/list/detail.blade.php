@extends('layout.app')

@section('title', 'ちるび/みんなの動画ページ/詳細')

@section('content')
    @include('layout.header')
    <div class="container">
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
                        >
                        </follow-button>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <a href="" class="text-muted">
                        10 フォロー
                    </a>
                    <a href="" class="text-muted">
                        10 フォロワー
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('videos.videos',['videos' => $user->videos])
    @include('layout.footer')
@endsection
