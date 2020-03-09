<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
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
            'email' => $request->email,
            'tel' => $request->tel,
            'pass1' => $request->pass1,
        ];

        // 中の配列を確認するための関数dd
        //dd($user);
        return view('login.checkUser', ['user' => $user]);
    }

    // /addからのデータをそのままデータベースに登録
    // Controllerに直接SQLをぶち込む方法
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'pass1' => $request->pass1,
        ];
        // 中の配列を確認するための関数
        // dd($param);
        DB::insert('insert into users (name, email, tel, password) values (:name, :email, :tel, :pass1)', $param);
        return redirect('/login');
    }
}
