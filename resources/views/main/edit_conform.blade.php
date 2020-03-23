@extends('layouts.kouyaapp1')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@section('menubar')
    @parent
    アカウント新規作成確認ページ
@endsection

@section('content')
<form action="/top/edit/edit_conform/edit_done" method="post">
@csrf
    <div class="conform">
        <table>
            <tr>
                <th>荒野行動内のあなたの名前</th>
                <td>{{$param['name']}}</td>
                <input type="hidden" name="name" value="{{$param['name']}}">
            </tr>
            <tr>
                <th>荒野行動ID</th>
                <td>{{$param['kouya_id']}}</td>
                <input type="hidden" name="kouya_id" value="{{$param['kouya_id']}}">
            </tr>
            <tr>
                <th>所属軍団</th>
                <td>{{$param['team']}}</td>
                <input type="hidden" name="team" value="{{$param['team']}}">
            </tr>
            <tr>
                <th>所属クラン</th>
                <td>{{$param['clan']}}</td>
                <input type="hidden" name="clan" value="{{$param['clan']}}">
            </tr>
            <tr>
                <th>出身都道府県</th>
                <td>{{$param['prefecture']}}</td>
                <input type="hidden" name="prefecture" value="{{$param['prefecture']}}">
            </tr>
            <tr>
                <th>プロフィール画像</th>
                <td>{{$param['image']}}</td>
                <input type="hidden" name="image" value="{{$param['image']}}">
            </tr>
        </table>
    </div>
<p>こちらでお間違えないですか？</p>
<input type="submit"  value="確定">
<input type="button" onclick="history.back()" value="修正">
</form>
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection 