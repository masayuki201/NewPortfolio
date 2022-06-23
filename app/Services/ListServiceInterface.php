<?php

namespace App\Services;

use http\Env\Request;

interface ListServiceInterface
{
    public function getIndexPage($request);

//    public function getSelectId(Request $request);
//
//    public function searchTargetId($select_target_id);
//
//    public function sortPaginate($query);
}
