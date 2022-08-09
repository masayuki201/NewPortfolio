<?php

namespace App\Services;

use App\Http\Requests\VideosRequest;
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

    public function storeVideos(VideosRequest $request)
    {
        //動画登録時 url,target_idをDBへ登録作業
        $request->user()->videos()->create([
            'url' => $request->url,
            'target_id' => $request->target_id,
        ]);
    }

    public function destroyVideos($id)
    {
        $video = Video::find($id);

        if (Auth::id() == $video->user_id) {
            $video->delete();
        }
    }

}

