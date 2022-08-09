<?php

namespace App\Services;

use http\Env\Request;
use App\Http\Requests\VideosRequest;

interface VideosServiceInterface
{
    public function getCreatePage($request);

    public function storeVideos(VideosRequest $request);

    public function destroyVideos($id);
}
