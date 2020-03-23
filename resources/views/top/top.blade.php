@extends('layouts.kouyaapp1')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@section('menubar')
    @parent
    トップページ
@endsection

@section('content')
    @if (isset($msg))
      <p>{{ $msg }}</p>
    @endif

    @csrf
    <div class="haikei"></div>
    <div class="nakami">
      <h1>荒野行動</h1>
        <ul>
          <li><a href="/top/recruit">リーグ戦を募集する</a></li>
          <li><a href="/top/entry">リーグ戦参加する</a></li>
          <li><a href="/top/edit">アカウントの編集</a></li>
        </ul>
      </div>

    
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection
