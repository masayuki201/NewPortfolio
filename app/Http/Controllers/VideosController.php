<?php

namespace App\Http\Controllers;

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
}
