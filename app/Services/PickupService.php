<?php

namespace App\Services;

use App\Models\Video;
use http\Env\Request;


class PickupService implements PickupServiceInterface
{
    public function getPickupPage($request)
    {
        //DBよりランダムに9個のビデオを選定し、表示する
        $pickup = Video::inRandomOrder()->take(9)->get();
        return $pickup;
    }
}

