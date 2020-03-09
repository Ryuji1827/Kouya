@extends('layouts.kouyaapp')

@section('title','荒野行動リーグ戦　WEBサイト')

@section('menubar')
    @parent
    募集ページ
@endsection

<style>
header{
  margin-top: 30px;
  color: #43A047;
}
hr{
  border-width: 3px;
  border-color: #43A047;
}
h1{
  font-size: 25px;
    font-weight: bold;
    margin: 0;
  text-align: center;
}
.align-light{
    text-align: right;
}
.form-group{
  margin-bottom: 35px;
}
footer p{
  text-align: center;
}
input:required{
  background: #ffcdd2;
}
input[type="email"]:invalid{
  background: #ffcdd2;
}
input:valid{
  background: transparent;
}
input:focus{
  background: #DCEDC8;
}
</style>

@section('content')
    @csrf
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <div class="container">
        <header>
           <div class="row">
                <h1>募集フォーム</h1>
            </div>
        </header>
    </div>

    <hr>
    
    <div class="container">
        <form action="top/recruit/recruit_conform" method="post">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label for="name"><span class="label label-danger"></span>主催者様のお名前</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="例：こんにちは太郎" autofocus required>
                </div>
                <div class="form-group">
                    <label for="league"><span class="label label-danger"></span>リーグ戦名</label>
                    <input type="text" id="league" name="league" class="form-control" placeholder="例：KWL（Knives out Wednesday League）" autofocus required>
                </div>
                <div class="form-group">
                    <label for="email"><span class="label label-danger"></span>メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="例：hello@tarouchann.com" required>
                </div>
                <div class="form-group">
                    <label for="tel"><span class="label label-danger"></span>電話番号</label>
                    <input type="tel" id="tel" name="tel" class="form-control" placeholder="例：080-1234-5678" required>
                </div>

                <div class="form-group">
                    <label for="when"><span class="label label-success"></span>開催日</label>
                    <select id="when" name="when" class="form-control">
                       <option value="">選択してください</option>
                        <option value="Mon">月</option>
                        <option value="Tsu">火</option>
                        <option value="Wed">水</option>
                        <option value="Thu">木</option>
                        <option value="Fri">金</option>
                        <option value="Sat">土</option>
                        <option value="Sun">日</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="time"><span class="label label-danger"></span>開催時間</label>
                    <input type="text" id="time" name="time" class="form-control" placeholder="例：20:00 ~ 21:00" autofocus required>
                </div>
                
                <div class="form-group">
                    <label for="howMany"><span class="label label-success"></span>戦闘形態</label>
                    <select id="howMany" name="howMany" class="form-control">
                       <option value="">選択してください</option>
                        <option value="デュオ">デュオ</option>
                        <option value="スクワッド">スクワッド</option>
                        <option value="クインテッド">クインテッド</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="map"><span class="label label-success"></span>マップ</label>
                    <select id="map" name="map" class="form-control">
                       <option value="">選択してください</option>
                        <option value="デュオ">平原野原</option>
                        <option value="スクワッド">嵐の半島</option>
                        <option value="クインテッド">東京</option>
                        <option value="ランダム">ランダム</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="level"><span class="label label-success"></span>参加希望レベル</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="q1_html" name="q1" value="デザイン">初心者
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="q1_html" name="q1" value="プログラミング">中級者
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="q1_html" name="q1" value="マーケティング">猛者
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="q1_html" name="q1" value="バナナ">レベル不問
                        </label>
                    </div>
                </div>

                <div class="form-group">
                <label for="money"><span class="label label-success"></span>賞金の有無</label>
                    <select id="money" name="money" class="form-control">
                       <option value="">選択してください</option>
                        <option value="有り">有</option>
                        <option value="無し">無</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="message"><span class="label label-success"></span>その他（ルール等の詳細など、必要なことを書いてください）</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">送信する</button>
            </div>
        </form>
    </div>


    
@endsection

@section('footer')
copyright 2020 RE:UG.
@endsection
