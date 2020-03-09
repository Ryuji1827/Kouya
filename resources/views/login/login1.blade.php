@extends('layouts.kouyaapp')

@section('title', 'ログイン')
<p><?php
        if(isset($_REQUEST['msg']))
        {
            $msg = $_REQUEST['msg'];
            echo $msg;
        }
?></p>
@section('content')
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  @if(count($errors) >0)
  <div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  </div>
  @endif
  <form action="/login/top" method="post">
  <div class="form-group">
  <label for="email">E-Mail</label>
  <input type="text" id="email" name="email" class="form-control">
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" id="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">ログイン</button>
  {{ csrf_field() }}
  </form>
  <p>アカウントをお持ちでない方は、新規作成ページボタンをクッリク！</p>
  <input type="button" onclick="location.href='http://localhost:8000/login/add'" value="新規作成ページ"></button>
  </div>
  </div>
@endsection
 