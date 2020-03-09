<html>
<head>
    <title>@yield('title')</title>
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

.menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
.content {margin:10px; }
.footer { text-align;right; font-size:10pt; margin:10px;
        border-bottom:solid 1px #ccc; color:#ccc; }
</style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <p></p>
    <h2 class="menutitle">メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>