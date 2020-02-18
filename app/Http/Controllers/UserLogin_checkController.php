<?php

namespace App\Http\Controllers;

use App\UserLogin;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;

class UserLoginController extends Controller
{
    public function post(UserLoginRequest $request)
    {
       return view('login.checkUser', ['msg' => 'こちらでお間違えないですか？']);
    }
    public function add(Request $request)
    {
        return view('login.addUser');
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
}