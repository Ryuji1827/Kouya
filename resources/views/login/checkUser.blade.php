@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')

@section('menubar')
    @parent
    ユーザー登録確認ページ
@endsection

@section('content')
<style type="text/css">

table{
  width: 100%;
}

table th{
  position: relative;
  text-align: left;
  width: 15%;
}

table th:after{
  display: block;
  content: "";
  width: 30px;
  height: 2px;
  background-color: #333;
  position: absolute;
  top:calc(50% - 1px);
  right:20px;
}

table td{
  text-align: left;
  width: 85%;
}

</style>
  <form action="/login/add/check/create" method="post">
    <table>
    @csrf
      <tr>
          <th>名前</th>
          <td>{{$user['name']}}</td>
          <input type="hidden" name="name" value="{{$user['name']}}">
      </tr>
      <tr>
          <th>メールアドレス</th>
          <td>{{$user['mail']}}</td>
          <input type="hidden" name="mail" value="{{$user['mail']}}">
      </tr>
      <tr>
          <th>電話番号</th>
          <td>{{$user['tel']}}</td>
          <input type="hidden" name="tel" value="{{$user['tel']}}">
      </tr>
      <tr>
          <th>パスワード</th>
          <td>{{$user['pass1']}}</td>
          <input type="hidden" name="pass1" value="{{$user['pass1']}}">
      </tr>
    </table>
    <br>
    <br>
    <p>こちらでお間違えないですか？</p>
    <input type="submit"  value="確定">
    <input type="button" onclick="location.href='http://localhost:8000/login/add'" value="修正"></button>
    </form>
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection