<?php

namespace App\Http\Controllers;

use App\UserLogin;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\DB;

class UserLoginController extends Controller
{
    // 新規作成画面を表示させる。
    public function show()
    {
        $data = ['msg' => '👇あなた様の情報を入力👇'];
        return view('login.addUser', $data);
    }
    // フォームリクエストによるvalidation
    // 次のcheckUserに配列をformで渡してあげる
    public function add(UserLoginRequest $request)
    {
        $user = [
            'name' => $request->name,
            'mail' => $request->mail,
            'tel' => $request->tel,
            'pass1' => $request->pass1,
        ];
        return view('login.checkUser', ['user' => $user]);
    }

    // /addからのデータをそのままデータベースに登録
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'tel' => $request->tel,
            'pass1' => $request->pass1,
        ];    
        $user_create = DB::insert('insert into login_user (name, mail, tel, password) values (name, mail, tel, pass1)', $param);
        return redirect('/login');
    }
}
