<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\VideosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('top.top');
});

//新規登録
Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register'])->name('signup.post');

//ログイン
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//パスワード再設定関連
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

//ピックアップ
Route::get('/pickup', [PickupController::class, 'index'])->name('pickup.index');

//ランキング
Route::get('/ranking', [RankingController::class, 'index'])->name('ranking.index');

//みんなの動画
Route::get('/list', [ListController::class, 'index'])->name('list.index');

//ログイン中　動画登録関連
Route::group(['middleware' => 'auth'], function () {
    //動画登録画面
    Route::get('/videos/create', [VideosController::class, 'create'])->name('videos.create');
    //動画登録
    Route::post('/videos/store', [VideosController::class, 'store'])->name('videos.store');
});

