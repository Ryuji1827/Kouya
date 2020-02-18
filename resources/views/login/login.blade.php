<html>
<head>
    <title>荒野行動リーグ戦　募集サイト</title>
    <style>
    </style>
</head>
<body>
    <h1>荒野行動募集サイト</h1>
    <form action="login/top" method="POST">
    @csrf
        <p>ID: <input type="text" name="login_id"></p>
        <p>PASSWORD: <input type="text" name="login_pass"></p>
        <input type="submit">
        <br>
        <br>
        <br>
    </form>
    <input type="button" onclick="location.href='http://localhost:8000/login/add'" value="新規作成ページ"></button>
</body>
</html>
