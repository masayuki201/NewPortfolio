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

        return  view('list.index', $params);
    }

    public function detail(string $nickname)
    {
        $user = User::where('nickname', $nickname)->first();

        return view('list.detail', [
            'user' => $user,
        ]);
    }
}
