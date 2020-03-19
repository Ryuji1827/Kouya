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
            <td>{{$data->name}}</td>
            <td>{{$data->league}}</td>
            <td>{{$data->when}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->howMany}}</td>
            <td>{{$data->map}}</td>
            <td>{{$data->level}}</td>
            <td>{{$data->money}}</td>
            <td>{{$data->message}}</td>
        </table>
        </br>
        <p>上記の内容についてリクエストがありました。参加可・不可をお伝えの上、メールに返信してください。</p>
    </body>
</html>