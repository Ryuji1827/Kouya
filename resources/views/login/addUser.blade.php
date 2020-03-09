@extends('layouts.kouyaapp')

@section('title', 'ユーザー登録')

@section('menubar')
    @parent
    ユーザー新規作成ページ
@endsection

@section('content')
    <p>{{ $msg }}</p>
    @if (count($errors) > 0)
        <p>⚠️入力に誤りがあります。再入力してください。</p>
    @endif

    <form action="/login/add/check" method="post">
    <table>
        @csrf
        @error('name')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        @error('email')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>メールアドレス: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
        @error('tel')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>電話番号: </th><td><input type="text" name="tel" value="{{old('tel')}}"></td></tr>
        @error('pass1')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>パスワード: </th><td><input type="text" name="pass1" value="{{old('pass1')}}"></td></tr>        
        @error('pass2')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
        @enderror
        <tr><th>パスワード（確認用): </th><td><input type="text" name="pass2" value="{{old('pass2')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection