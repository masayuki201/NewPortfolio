<?php

namespace App\Services;

use http\Env\Request;

interface ListServiceInterface
{
    public function getListPage($request);
}
