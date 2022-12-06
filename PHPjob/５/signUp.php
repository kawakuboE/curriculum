<?php
    session_start();
    require_once('db_connect.php');
    if (isset($_POST["signUp"])) {
        if(!empty($_POST['name']) && !empty($_POST['password'])){
                
                $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";

                $name = $_POST['name'];
                $password = $_POST['password'];
                $password_hash = password_hash($password, PASSWORD_DEFAULT);    

                $pdo = db_connect();
                try {
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':password', $password_hash);
                    $stmt->execute();
                    header("Location: main.php");
                    exit;
                } catch (PDOException $e) {
                    echo 'データベースエラー' . $e->getMessage();
                    die();
                }
            }
            
    }
    ?>
    
<!DOCTYPE html>
<html>
<head>
    <title>ユーザー登録画面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="name" id="name" placeholder="ユーザー名">
        <br>
        <input type="password" name="password" id="password" placeholder="パスワード"><br>
        <input type="submit" value="新規登録" id="signUp" name="signUp">
    </form>
</body>
</html>