<?php

namespace App\Services;

use http\Env\Request;

interface RankingServiceInterface
{
    public function getRankingPage($request);
}
