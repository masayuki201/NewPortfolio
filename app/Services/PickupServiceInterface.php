<?php

namespace App\Services;

use http\Env\Request;

interface PickupServiceInterface
{
    public function getPickupPage($request);
}
