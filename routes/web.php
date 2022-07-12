<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ListController;


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

//ピックアップ
Route::get('/pickup', [PickupController::class, 'index'])->name('pickup.index');

//ランキング
Route::get('/ranking', [RankingController::class, 'index'])->name('ranking.index');

//みんなの動画
Route::get('/list', [ListController::class, 'index'])->name('list.index');



