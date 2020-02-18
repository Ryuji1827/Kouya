@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')

@section('menubar')
    @parent
    ユーザー登録確認ページ
@endsection

@section('content')
    <table>
    <tr><th>Name</th><th>Mail</th><th>Tel</th><th>Password</th></tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->mail}}</td>
            <td>{{$user->tel}}</td>
            <td>{{$user->password}}</td>
        </tr>

    @endforeach
    </table>
    <br>
    <br>
    <p>こちらでお間違えないですか？</p>
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection