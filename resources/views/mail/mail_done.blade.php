@extends('layouts.kouyaapp1')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@section('menubar')
    @parent
    リーグ戦参加意思確認ページ
@endsection

@section('content')
<p>メールを送信いたしました。返信をお待ちください。</p>
    
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection