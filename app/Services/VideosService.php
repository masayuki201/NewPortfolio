<?php

namespace App\Services;

use App\Models\Video;
use Illuminate\Support\Facades\Auth;



class VideosService implements VideosServiceInterface
{
    public function getCreatePage($request)
    {
        $user = Auth::user();
        $videos = $user->videos()->orderBy('id', 'desc')->paginate(30);

        $data=[
            'user' => $user,
            'videos' => $videos,
        ];

        return $data;
    }
}

