<?php
$name = "taro";
$password = "pass";

if($name === "taro" && $password === "pass"){
    echo "ログイン成功です";
}else if($name === "taro" && $password !== "pass"){
    echo "パスワードが間違っています。";
}else if($name !== "taro" && $password === "pass"){
    echo "名前が間違っています。";
}else{
    echo "入力情報が間違っています";
}
?>