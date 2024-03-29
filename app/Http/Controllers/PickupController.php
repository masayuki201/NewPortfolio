<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PickupServiceInterface;

class PickupController extends Controller
{
    protected $service;

    public function __construct(PickupServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $pickup = $this->service->getPickupPage($request);

        return view('pickups.index', ['pickup' => $pickup]);
    }
}
