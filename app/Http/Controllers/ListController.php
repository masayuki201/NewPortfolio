<?php

namespace App\Http\Controllers;

use App\Services\ListServiceInterface;
use App\Services\ListService;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Target;


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

}
