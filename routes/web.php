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
use App\Http\Controllers\UsersController;

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
    return view('tops.top');
});

//新規登録
Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'register'])->name('signup.post');

//GoogleのIDで新規登録
Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', [RegisterController::class, 'showProviderUserRegistrationForm'])->name('{provider}');
    Route::post('/{provider}', [RegisterController::class, 'registerProviderUser'])->name('{provider}');

});

//ログイン
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Googleログイン
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('{provider}');
    Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('{provider}.callback');
});

//パスワード再設定関連
Route::prefix('password')->name('password.')->group(function () {
    Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('request');
    Route::post('/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('email');
    Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('reset');
    Route::post('/reset', [ResetPasswordController::class, 'reset'])->name('update');
});


//ピックアップ
Route::get('/pickup', [PickupController::class, 'index'])->name('pickup.index');

//ランキング
Route::get('/ranking', [RankingController::class, 'index'])->name('ranking.index');

//みんなの動画
Route::prefix('list')->name('list.')->group(function () {
    //一覧
    Route::get('/', [ListController::class, 'index'])->name('index');
    //登録動画tab
    Route::get('/{nickname}/detail', [ListController::class, 'detail'])->name('detail');
    //いいねtab
    Route::get('/{nickname}/likes', [ListController::class, 'likes'])->name('likes');
    //フォロー一覧
    Route::get('/{nickname}/followings', [ListController::class, 'followings'])->name('followings');
    //フォロワー一覧
    Route::get('/{nickname}/followers', [ListController::class, 'followers'])->name('followers');
});



//ログイン中　動画登録関連
Route::group(['middleware' => 'auth', 'as' => 'videos.'], function () {
    //動画登録画面
    Route::get('/videos/create', [VideosController::class, 'create'])->name('create');
    //動画登録
    Route::post('/videos/store', [VideosController::class, 'store'])->name('store');
    //動画削除
    Route::delete('/videos/{id}/delete', [VideosController::class, 'destroy'])->name('destroy');
    //いいね
    Route::put('/videos/{video}/like', [VideosController::class, 'like'])->name('like');
    //いいね解除
    Route::delete('/videos/{video}/like', [VideosController::class, 'unlike'])->name('unlike');
});

//ログイン中　マイページ関連
Route::group(['middleware' => 'auth', 'as' => 'user.'], function () {
    //マイページ
    Route::get('/user/{id}', [UsersController::class, 'show'])->name('show');
    //マイページ編集
    Route::get('/user/{id}/edit', [UsersController::class, 'edit'])->name('edit');
    //マイページ更新
    Route::post('/user/{id}', [UsersController::class, 'update'])->name('update');
    //ユーザ情報削除
    Route::delete('/user/{id}/delete', [UsersController::class, 'destroy'])->name('destroy');
    //フォローする
    Route::put('/user/{nickname}/follow', [UsersController::class, 'follow'])->name('follow');
    //フォロー解除
    Route::delete('/user/{nickname}/follow', [UsersController::class, 'unfollow'])->name('unfollow');
});


