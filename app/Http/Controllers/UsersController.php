<?php

namespace App\Http\Controllers;

//use App\Services\UsersServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class UsersController extends Controller
{
    protected $service;

//    public function __construct(UsersServiceInterface $service)
//    {
//        $this->service = $service;
//    }

    //マイページの表示
    public function show($id)
    {
        if($id == Auth::id()){
            return view('users.detail',[ 'id' => $id ]);
        }
        //異なるIDで開こうとした際、フラシュメッセージをみんなの動画ページへ表示させる
        return redirect('/index')->with('flash_message', '不適切なURLです。');
    }

    //マイページ編集の表示
    public function edit($id)
    {
        if($id == Auth::id()){
            return view('users.edit',[ 'id' => $id ]);
        }
        //異なるIDで開こうとした際、フラシュメッセージをみんなの動画ページへ表示させる
        return redirect('/index')->with('flash_message', '不適切なURLだよ。');
    }

    //マイページ更新
    public function update(Request $request)
    {
        // マイページ更新の際のバリデーション
        $request->validate([
            'nickname' => ['required', 'string', 'max:16'],
            'email' => ['required', 'string', 'email', 'max:128', Rule::unique('users')->ignore(Auth::id())],
        ]);

        //リクエストデータ受取
        $form = $request->all();
        unset($form['_token']);

        //フォームトークン削除、更新
        $auth = Auth::user();
        $auth->fill($form)->save();
        return view('users.detail',[ 'auth' => $auth ]);
    }

    //ユーザ情報削除
    public function destroy()
    {
        Auth::user()->delete();
        return redirect('/');
    }


}
