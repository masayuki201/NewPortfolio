<?php

namespace App\Http\Controllers;

use App\Services\RankingServiceInterface;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Services\RegisterServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    use RegistersUsers;

    // 新規登録後は動画登録画面へ進む
    protected $redirectTo = '/videos/create';

    public function  __construct(RegisterServiceInterface $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }

    //新規登録時のバリデーション
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nickname' => ['required', 'string', 'min:3', 'max:16', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Register.blade.phpを表示させる
//    public function showRegistrationForm()
//    {
//        return view('auth.register');
//    }

}
