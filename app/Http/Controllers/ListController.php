<?php

namespace App\Http\Controllers;

use App\Services\ListServiceInterface;
use Illuminate\Http\Request;



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
