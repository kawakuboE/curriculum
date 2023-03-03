<?php
// セッション開始
session_start();
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "root";
// ユーザー名のパスワード
$db['pass'] = "root";

//修正6:DBが違う。
// データベース名
//$db['dbname'] = "loginManagement";
$db['dbname'] = "yigroupBlog";
?>