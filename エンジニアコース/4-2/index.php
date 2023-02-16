//前提としてPDOを使うポイント。

・PDOStatementオブジェクトはforeachで直接回せる
・fetch(PDO::FETCH_ASSOC)して配列に直してから操作

<?php
require_once('getData.php'); //getData.phpを読み込む。
$data = new getData(); //getDataクラスをインスタンス化する。
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
                $user = $data -> getUserData(); //クラスの中のgetUserData関数を使う。
                //var_dump($user);
                $name = $user["last_name"].$user["first_name"]; //$nameは連想配列になっているので、それぞれkeyを指定する。

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
               //var_dump($postData); //fetch処理してないのでDOStatementオブジェクトとして返される。
               //getPostData関数はfetchが使われていない。fetchは配列の形式を指定するモード。よって、$postDataは配列ではなくオブジェクト（PDOStatementオブジェクト）である。（PDOStatementはTraversableインターフェイスで実装されているオブジェクトでforeachが使える）foreachは配列とオブジェクトを反復処理するための方法なのでこれを使う。foreachの条件式で($postData as $row)として、連想配列として扱えるようにする。
               //$postDataの各反復において現在の要素の値が$rowに代入される。
               foreach ($postData as $row) {?>
                  <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["title"];?></td>
                    <td><?php 
                        if($row['category_no'] == 1){
                            echo "食事";
                        }else if($row['category_no'] == 2){
                            echo "旅行";
                        }else{
                            echo "その他";
                        }
                    ?></td>
                    <td><?php echo $row["comment"];?></td>
                    <td><?php echo $row["created"];?></td>
                  </tr>
                  <?php }?>
            </tbody>
        </table>

    </section>
    <footer>
     <p>Y&I group.inc</p>
    </footer>
</body>
</html>
