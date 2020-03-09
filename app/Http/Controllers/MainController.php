<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // 募集ページを表示する
    public function recruit()
    {
        return view('main.recruit');
    }

    public function recruit_conform(Request $request)
    {
        $param = [
            'name' => $request->name,
            'league' => $request->league,
            'email' => $request->email,
            'tel' => $request->tel,
            'when' => $request->when,
            'time' => $request->time,
            'howMany' => $request->howMany,
            'map' => $request->map,
            'level' => $request->level,
            'money' => $request->money,
            'message' => $request->message,
        ];
        return view('main.recruit_conform',['param' => $param]);
    }
}
