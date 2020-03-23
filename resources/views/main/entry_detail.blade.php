@extends('layouts.kouyaapp1')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@section('menubar')
    @parent
    リーグ戦詳細ページ
@endsection

@section('content')
     @if (isset($param))
        <div class="nakami">
            <h1>詳細ページ</h1>
            <form action="/top/entry/{id}/mail" method="post">
            @csrf
            <table>
                <tr><th>主催者様</th><th>リーグ戦名</th><th>日時</th><th>時間</th><th>戦闘形態</th><th>マップ</th><th>募集レベル</th><th>賞金</th><th>その他・メッセージ</th></tr>
                <tr>
                    <td><input type="hidden" name="name" value="{{$param->name}}">{{$param->name}}</td>
                    <td><input type="hidden" name="league" value="{{$param->league}}">{{$param->league}}</td>
                    <td><input type="hidden" name="when" value="{{$param->when}}">{{$param->when}}</td>
                    <td><input type="hidden" name="time" value="{{$param->time}}">{{$param->time}}</td>
                    <td><input type="hidden" name="howMany" value="{{$param->howMany}}">{{$param->howMany}}</td>
                    <td><input type="hidden" name="map" value="{{$param->map}}">{{$param->map}}</td>
                    <td><input type="hidden" name="level" value="{{$param->level}}">{{$param->level}}</td>
                    <td><input type="hidden" name="money" value="{{$param->money}}">{{$param->money}}</td>
                    <td><input type="hidden" name="message" value="{{$param->message}}">{{$param->message}}</td>
                    <td><input type="hidden" name="email" value="{{$param->email}}"></td>
                </tr>
            </table>
            <input type="submit" value="参加する">
            <input type="button" onclick="history.back()" value="戻る">
            </form>
            
                
            @endif

@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection 