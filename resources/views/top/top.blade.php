@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')

<style>
  ul {
  background: whitesmoke;
  padding: 0 0.5em;
  position: relative;
}

ul li {
  line-height: 1.5;
  padding: 0.5em 0 0.5em 1.5em;
  border-bottom: 2px solid white;
  list-style-type: none!important;
}

ul li:before {
  font-family: "Font Awesome 5 Free";
  content: "\f00c";/*アイコン種類*/
  position: absolute;
  left : 0.5em; /*左端からのアイコンまで*/
  color: #668ad8; /*アイコン色*/
}

ul li:last-of-type {
  border-bottom: none;/*最後の線だけ消す*/
}
</style>

@section('menubar')
    @parent
    トップページ
@endsection

@section('content')
    @if (isset($msg))
      <p>{{ $msg }}</p>
    @endif

    @csrf
    <ul>
        <li><a href="/top/recruit">リーグ戦を募集する</a></li>
        <li><a href="/top/entry">リーグ戦参加する</a></li>
        <li><a href="/top/edit">設定を変更する</a></li>
    </ul>

    
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection
