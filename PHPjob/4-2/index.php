<?php
require_once('getData.php');
$data = new getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" height="110" alt="Y&Iロゴ">
        </div>
        <div class="accountinfo">
            <div class="welcom">
              <p>
                <?php
                $user = $data -> getUserData();
                $name = $user["last_name"].$user["first_name"];
                // データは配列で渡されます
                echo "ようこそ {$name} さん";
                ?>
              </p>
            </div>
            <div class="logindate">
              <p>
                <?php
                $lastLogin = $user["last_login"];
                echo "最終ログイン日：{$lastLogin}";
                ?>
              </p>
            </div>
        </div>
    </header>
    <section>
        <table>
            <tbody>
                <tr>
                    <td>記事ID</td>
                    <td>タイトル</td>
                    <td>カテゴリ</td>
                    <td>本文</td>
                    <td>投稿日</td>
                </tr>
               <?php
               $postData = $data -> getPostData();
                while ($row = $postData->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td>
                    <?php
                            if($row['category_no'] == 1){
                                echo "食事";
                            }else if($row['category_no'] == 2){
                                echo "旅行";
                            }else{
                                echo "その他";
                            }
                        ?>
                    </td>
                    <td><?php echo $row['comment']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>

    </section>
    <footer>
     <p>Y&I group.inc</p>
    </footer>
    
</body>
</html>