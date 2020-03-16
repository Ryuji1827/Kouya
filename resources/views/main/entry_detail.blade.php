@extends('layouts.kouyaapp1')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@section('menubar')
    @parent
    リーグ戦参加ページ
@endsection

@section('content')
    @if (isset($param))
        {{$param->getData()}}
    @endif

@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection 