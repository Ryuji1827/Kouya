@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')

@section('menubar')
    @parents
    トップページ
@endsection

@section('content')
    @csrf
    <a href="{{action('LoginController@login')}}">リーグ戦を募集する</a>
    <li><a href="{{action('LoginController@search')}}">リーグ戦を探す・参加する</a></li>
    <li><a href="{{action('LoginController@edit')}}">設定を編集する</a></li>

@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection
