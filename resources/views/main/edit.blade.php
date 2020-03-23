@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

@section('menubar')
    @parent
    プロフィール作成ページ
@endsection

@section('content')
<?php
$test_alert = "<script type='text/javascript'>alert('こんにちは！　まずは、アカウントを作りましょう');</script>";
echo $test_alert;
?>
<div class="container">
        <header>
           <div class="row">
                <h1>プロフィール新規作成</h1>
            </div>
        </header>
    </div>

    <hr>
    
    <div class="container">
        <form action="/top/edit/edit_conform" method="post">
        @csrf
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label for="name"><span class="label label-danger"></span>荒野行動内のあなたの名前</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="例：こんにちは太郎" autofocus required>
                </div>
                <div class="form-group">
                    <label for="kouya_id"><span class="label label-danger"></span>荒野行動ID</label>
                    <input type="text" id="kouya_id" name="kouya_id" value="{{old('kouya_id')}}" class="form-control" placeholder="９桁の数字で数字で入力してください。" autofocus required>
                </div>
            
                <div class="form-group">
                    <label for="team"><span class="label label-danger"></span>所属軍団</label>
                    <input type="text" id="team" name="team" value="{{old('team')}}" class="form-control" placeholder="こちらは任意です。">
                </div>

                <div class="form-group">
                    <label for="clan"><span class="label label-danger"></span>所属クラン</label>
                    <input type="text" id="clan" name="clan" value="{{old('clan')}}" class="form-control" placeholder="こちらは任意です。">
                </div>

                <div class="form-group">
                    <label for="prefecture"><span class="label label-success"></span>出身都道府県</label>
                    <select id="prefecture" name="prefecture" value="{{old('prefecture')}}" class="form-control">
                        <option value="">選択してください</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">プロフィール画像</label>
                    <p>　プロフィール画像を選択してください。</p>
                    <input type="file" id="image" name="image" value="{{old('image')}}" required>
                </div>
                <br />

                <button type="submit" class="btn btn-primary">送信する</button>
            </div>
        </form>
    </div>


@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection 