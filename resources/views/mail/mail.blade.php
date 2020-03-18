<!DOCTYPE html>
<html lang="ja">
    <style>
        body {
            background-color: #fffacd;
        }
        h1 {
            font-size: 16px;
            color: #ff6666;
        }
        #button {
            width: 200px;
            text-align: center;
        }
            #button a {
            padding: 10px 20px;
            display: block;
            border: 1px solid #2a88bd;
            background-color: #FFFFFF;
            color: #2a88bd;
            text-decoration: none;
            box-shadow: 2px 2px 3px #f5deb3;
        }
            #button a:hover {
            background-color: #2a88bd;
            color: #FFFFFF;
        }
    </style>
    <body>
        <p>~荒野行動WEBサイトより~</p></br>
        <p>--------------------------</p>
        <table>
        @foreach ($data as $values)
            <td>{{$values['name']}}</td>
            <td>{{$values['league']}}</td>
            <td>{{$values['when']}}</td>
            <td>{{$values['time']}}</td>
            <td>{{$values['howMany']}}</td>
            <td>{{$values['map']}}</td>
            <td>{{$values['level']}}</td>
            <td>{{$values['money']}}</td>
            <td>{{$values['message']}}</td>
        @endforeach
        </table>
        </br>
        <p>上記の内容についてリクエストがありました。参加可・不可をお伝えの上、メールに返信してください。</p>
    </body>
</html>