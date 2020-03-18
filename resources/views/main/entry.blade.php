@extends('layouts.kouyaapp1')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

@section('menubar')
    @parent
    リーグ戦参加ページ
@endsection

@section('content')
    <div class="nakami">
        <h1>リーグ戦状況</h1>
        <table>
            <tr><th>Name</th><th>League</th><th>Day</th><th>Time</th><th>How</th><th>Level</th><th>Money</th></tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->league}}</td>
                    <td>{{$item->when}}</td>
                    <td>{{$item->time}}</td>
                    <td>{{$item->howMany}}</td>
                    <td>{{$item->level}}</td>
                    <td>{{$item->money}}</td>
                    <td><button type="button" class="btn-push" onclick="location.href='http://localhost:8000/top/entry/{{$item->id}}'">詳細</button></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="nakami">
        <h2>荒野NEWS</h2>

    {{ $items->links() }}
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection 