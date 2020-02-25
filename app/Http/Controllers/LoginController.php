<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //ログイン画面を表示するだけのメソッド
    public function login()
    {
        return view('login.login');
    }

    //ID&PASSをもとにTOPページに送るメソッド
    public function top(Request $request)
    {
        return view('top.top');
    }
}
