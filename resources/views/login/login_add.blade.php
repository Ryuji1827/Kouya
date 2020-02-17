@extends('layouts.kouyaapp')

@section('title', 'ユーザー登録')

@section('menubar')
    @parent
    ユーザー新規作成ページ
@endsection

@section('content')
    <form action="/login/check" method="post">
    <table>
        @csrf
        <tr><th>名前: </th><td><input type="text" name="name"></td></tr>
        <tr><th>メールアドレス: </th><td><input type="text" name="mail"></td></tr>
        <tr><th>電話番号: </th><td><input type="text" name="tel"></td></tr>
        <tr><th>パスワード: </th><td><input type="text" name="pass1"></td></tr>
        <tr><th>パスワード（確認用): </th><td><input type="text" name="pass2"></td></tr>
        <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection