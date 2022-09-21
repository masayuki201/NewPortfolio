<?php

namespace App\Http\Controllers;

use App\Services\ListServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;


class ListController extends Controller
{
    protected $service;

    public function __construct(ListServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $params = $this->service->getListPage($request);

        return  view('lists.index', $params);
    }

    public function detail(string $nickname)
    {
        $user = User::where('nickname', $nickname)->first();

        return view('lists.detail', [
            'user' => $user,
        ]);
    }

    public function likes(string $nickname)
    {
        $user = User::where('nickname', $nickname)->first();

        $videos = $user->likes->sortByDesc('create_at');

        return view('lists.likes', [
            'user' =>$user,
            'videos' => $videos,
        ]);
    }

    public function followings(string $nickname)
    {
        $user = User::where('nickname', $nickname)->first();

        $followings = $user->followings->sortByDesc('create_at');

        return view('lists.followings',[
            'user' => $user,
            'followings' => $followings,
        ]);
    }

    public function followers(string $nickname)
    {
        $user = User::where('nickname', $nickname)->first();

        $followers = $user->followers->sortByDesc('create_at');

        return view('lists.followers', [
            'user' => $user,
            'followers' => $followers,
        ]);
    }
}
