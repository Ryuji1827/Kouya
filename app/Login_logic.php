<?php

class Login
{

    // /loginで送られたidとpassを受け取る
    //$login_id = $_POST['login_id'];
    //$login_pass = $_POST['login_pass'];

    // DBからlogin_idとlogin_passを検索してくる
    public function checkID($login_id, $login_pass)
    {
        // findメソッドで、送れれるlogin_idを引数に一致するレコードを探してくる
        $user_info = Person::find($_POST['login_id']);
        foreach ($user_info as $user)
        {
            $user_id = $user->id;
            $user_pass = $user->password;
        }
        // if文を使い、/loginから送られてきたidとDBに同じIDがあるか、確認する
        // ID,PASSWORDが不一致、未入力の場合は/loginページにリダイレクトする
        if ($login_id == $user_id AND $login_pass == $user_pass)
        {
            return view('/login/top/');
        }
        else if ($login_id != $user_id || $login_pass != $user_pass)
        {
            $msg = 'IDまたはPASSWORDが一致しません。';
            return redirect('/login', ['msg' => $msg]);
        }
        else if($login_id == '' || $login_pass == '')
        {
            $msg = '正しく入力してください.';
            return redirect('/login', ['msg' => $msg]);
        }
    }
}