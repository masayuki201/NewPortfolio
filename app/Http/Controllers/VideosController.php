<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function store(Request $request)
    {
        //動画登録時のバリデーション
        $this->validate($request,[
            'url' => 'required|max:11',
            'target_id' => 'max:10',
        ]);

        //動画登録時 url,target_idをDBへ登録作業
        $request->user()->videos()->create([
            'url' => $request->url,
            'target_id' => $request->target_id,
        ]);

        return back();
    }

}
