<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //ログイン画面を表示するだけのメソッド  
    /*public function login()
    {
        return view('login.login1');
    }
    */

    //ID&PASSをもとにTOPページに送るメソッド
    public function top()
    {
        return view('top.top');
    }

    public function postTop(Request $request)
    {
        $this->validate($request,[
        'email' => 'email|required',
        'password' => 'required|min:4'
    ]);
    
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
        /*return redirect()->route('top.top');
                if (Auth::check())  */

            // ログイン済みのときの処理
            return view('top.top'); 
        } 
        else 
        {
        // ログインしていないときの処理
            $msg = 'メールアドレスまたはパスワードが正しくありません。';
            return view('login.login1', ['msg' => $msg]);
        }
    }
}

