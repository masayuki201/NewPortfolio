<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RankingServiceInterface;

class RankingController extends Controller
{
    protected $service;

    public function __construct(RankingServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $videoRanking = $this->service->getRankingPage($request);

        return view('rankings.index', $videoRanking);
    }
}
