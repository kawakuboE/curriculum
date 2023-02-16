<?php
// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

require_once('db_connect.php');

    // 実行したいSQL文を準備
    $sql = "SELECT * FROM books ORDER BY id DESC";
    // 関数db_connect()からPDOを取得する
    $pdo = db_connect();
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
    
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>在庫一覧画面</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    
    <div class="mainpgbuttton"><button class="register"><a href="register.php">新規登録</a></button>
    <button class="logout"><a href="logout.php">ログアウト</a></button>
    </div>
    <table>
    <tr>
        <td>タイトル</td>
        <td>発売⽇</td>
        <td>在庫数</td>
        <td></td>
    </tr>
    <?php 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php $day = new DateTime($row['date']);
                      echo $day->format('Y/m/d');
            ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><button class="delete"><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></button></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>