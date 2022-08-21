<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\VideosRequest;
use App\Services\VideosServiceInterface;


class VideosController extends Controller
{
    protected $service;

    public function __construct(VideosServiceInterface $service)
    {
        $this->service = $service;
    }

    //動画登録ページ
    public function create(Request $request)
    {
        $videos = $this->service->getCreatePage($request);
        $data = $videos;

        return view('videos.create', $data);
    }

    //動画登録フォームからの動画登録アクション
    public function store(VideosRequest $request)
    {
        //動画登録時のバリデーション
        $this->service->storeVideos($request);

        return back();
    }

    //動画削除アクション
    public function destroy($id)
    {
        $this->service->destroyVideos($id);

        return back();
    }

    //いいねアクション
    public function like(Request $request, Video $video)
    {
        \Debugbar::info('こ1');
        //重複のいいねを防ぐ
        $video->likes()->detach($request->user()->id);
        $video->likes()->attach($request->user()->id);

        return [
            'id' => $video->id,
            'countLikes' => $video->count_likes,
        ];
    }

    //いいね解除アクション
    public function unlike(Request $request, Video $video)
    {
        $video->likes()->detach($request->user()->id);

        return [
            'id' => $video->id,
            'countLikes' => $video->count_likes,
        ];
    }
}
