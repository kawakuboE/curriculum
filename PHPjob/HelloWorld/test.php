<?php
header('Content-Type: text/html; charset=UTF-8');
$name = "taro";
$pass = "pass";

if ($name === "taro" && $pass === "pass") {
    echo 'ログイン成功です';
}elseif($name === "taro" && $pass != "pass"){
    echo 'パスワードが間違っています。';
}elseif($name != "taro" && $pass === "pass"){
    echo '名前が間違っています。';
}else{
    echo '入力情報が間違っています';
}
?>