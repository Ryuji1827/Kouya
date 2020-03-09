<!DOCTYPE HTML>
<html lang="ja">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  ul {
  background: whitesmoke;
  padding: 0 0.5em;
  position: relative;
}

ul li {
  line-height: 1.5;
  padding: 0.5em 0 0.5em 1.5em;
  border-bottom: 2px solid white;
  list-style-type: none!important;
}

ul li:before {
  font-family: "Font Awesome 5 Free";
  content: "\f00c";/*アイコン種類*/
  position: absolute;
  left : 0.5em; /*左端からのアイコンまで*/
  color: #668ad8; /*アイコン色*/
}

ul li:last-of-type {
  border-bottom: none;/*最後の線だけ消す*/
}
</style>
<body>

</body>
</html>