<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // ログイン後は、動画登録画面へ進む
    protected $redirectTo = '/videos/create';

    // この処理を行うのは必ずguestでなければならない（logoutを除いて）
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
