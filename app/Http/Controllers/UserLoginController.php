<?php

namespace App\Http\Controllers;

use App\UserLogin;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;

class UserLoginController extends Controller
{
    public function post(Request $request)
    {
       return view('login.checkUser', ['msg' => 'こちらでお間違えないですか？']);
    }
    public function add(Request $request)
    {
        return view('login.addUser', ['msg' => '👇あなた様の情報を入力👇']);
    }
    public function create(Request $request)
    {
        $this->validate($request, UserLogin::$rules);
        $user_login = new UserLogin;
        $form = $request->all();
        unset($form['_token']);
        $user_login->fill($form)->save();
        return redirect('/check');
    }
    
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'tel.integer' => '整数で入力してください。',
            'tel.digits:11' => 'ハイフンなしの11桁で入力してください。',
            'pass1.password' => 'パスワードを入力してください。',
            'pass2.password' => '上記と同じものを入力してください。',
        ];
    }
}
