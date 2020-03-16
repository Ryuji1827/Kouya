@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')

@section('menubar')
    @parent
    募集フォーム確認ページ
@endsection

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

@section('content')
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <form action="/top/recruit/recruit_conform/recruit_create" method="post">
    @csrf
    <table>
      <tr>
          <th>主催者名</th>
          <td>{{$param['name']}}</td>
          <input type="hidden" name="name" value="{{$param['name']}}">
      </tr>
      <tr>
          <th>リーグ戦名</th>
          <td>{{$param['league']}}</td>
          <input type="hidden" name="league" value="{{$param['league']}}">
      </tr>
      <tr>
          <th>メールアドレス</th>
          <td>{{$param['email']}}</td>
          <input type="hidden" name="email" value="{{$param['email']}}">
      </tr>
      <tr>
          <th>電話番号</th>
          <td>{{$param['tel']}}</td>
          <input type="hidden" name="tel" value="{{$param['tel']}}">
      </tr>
      <tr>
          <th>開催日</th>
          <td>{{$param['when']}}</td>
          <input type="hidden" name="when" value="{{$param['when']}}">
      </tr>
      <tr>
          <th>開催時間</th>
          <td>{{$param['time']}}</td>
          <input type="hidden" name="time" value="{{$param['time']}}">
      </tr>
      <tr>
          <th>戦闘形態</th>
          <td>{{$param['howMany']}}</td>
          <input type="hidden" name="howMany" value="{{$param['howMany']}}">
      </tr>
      <tr>
          <th>マップ</th>
          <td>{{$param['map']}}</td>
          <input type="hidden" name="map" value="{{$param['map']}}">
      </tr>
      <tr>
          <th>参加希望レベル</th>
          <td>{{$param['level']}}</td>
          <input type="hidden" name="level" value="{{$param['level']}}">
      </tr>
      <tr>
          <th>戦闘形態</th>
          <td>{{$param['money']}}</td>
          <input type="hidden" name="money" value="{{$param['money']}}">
      </tr>
      <tr>
          <th>その他</th>
          <td>{{$param['message']}}</td>
          <input type="hidden" name="message" value="{{$param['message']}}">
      </tr>
    </table>
    <br>
    <br>
    <p>こちらでお間違えないですか？</p>
    <input type="submit"  value="確定">
    <input type="button" onclick="history.back()" value="修正"></button>
    </form>
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection
