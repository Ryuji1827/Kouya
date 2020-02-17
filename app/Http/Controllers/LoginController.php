<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function top()
    {
        return view('top.top');
    }
    public function index(Request $request)
    {
        $users = DB::select('select * from login_user');
        return view('login.login_check', ['users' => $users]);
    }
    public function add(Request $request)
    {
        return view('login.add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'tel' => $request->tel,
            'pass1' => $request->pass1,
            'pass2' =>$request->pass2,
        ];
        DB::table('login_user')->insert($param);
        return redirect('/check');
    }
}
