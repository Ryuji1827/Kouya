<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // 募集ページを表示する
    public function recruit()
    {
        return view('main.recruit');
    }

    // 募集ページの内容を確認用として、再表示する
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

    // recruit_conformのパラメータをDBに登録する
    public function recruit_create(Request $request)
    {
        $participant = new Participant;
        $form = $request->all();
        unset($form['_token']);
        $participant->fill($form)->save();
        $msg = '募集内容を投稿しました。';
        return redirect()->route('to_the_top', ['msg' => $msg]);
    }

    // entryのページを表示する
    public function entry()
    {
        $items = Participant::orderBy('created_at', 'desc')->paginate(5);
        return view('main.entry', ['items' => $items]);
    }

    // entry_detailのページを表示する
    public function detail($id)
    {
        $param = Participant::find($id);
        return view('main.entry_detail', ['param' => $param]);
    }
}
