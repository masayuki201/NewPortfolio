<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{
    //動画登録ページ
    public function create()
    {
        $user = Auth::user();
        $videos = $user->videos()->orderBy('id', 'desc')->paginate(30);

        $data=[
            'user' => $user,
            'videos' => $videos,
        ];
        return view('videos.create', $data);
    }
}
