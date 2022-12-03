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
                require_once('getData.php');
                $data = new getData();
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
                    <?php
                        $post = new getData();
                        $postData = $post -> getPostData();
                        $id = array_keys($postData);
                        $title = array_column($postData,"title");
                        function Category($i){
                                $post = new getData();
                                $postData = $post -> getPostData();
                                $categoryNo = array_column($postData,"category_no");
                                if($categoryNo[$i] == 1){
                                    echo "食事";
                                }else if($categoryNo[$i] == 2){
                                    echo "旅行";
                                }else{
                                    echo "その他";
                                }
                        }  
                        $comment = array_column($postData,"comment");
                        $created = array_column($postData,"created");
                        
                    ?>
                <tr>
                    <td>記事ID</td>
                    <td>タイトル</td>
                    <td>カテゴリ</td>
                    <td>本文</td>
                    <td>投稿日</td>
                </tr>
                <tr>
                    <td><?php
                      echo $id[0];
                    ?> </td>
                    <td><?php
                    echo $title[0];
                    ?></td>
                    <td><?php
                    echo Category(0);
                    ?></td>
                    <td><?php
                    echo $comment[0];
                    ?></td>
                    <td><?php
                    echo $created[0];
                    ?></td>
                </tr>
                <tr>
                    <td><?php
                      echo $id[1];
                    ?> </td>
                    <td><?php
                    echo $title[1];
                    ?></td>
                    <td><?php
                    echo Category(1);
                    ?></td>
                    <td><?php
                    echo $comment[1];
                    ?></td>
                    <td><?php
                    echo $created[1];
                    ?></td>
                </tr>
                <tr>
                <td><?php
                      echo $id[2];
                    ?> </td>
                    <td><?php
                    echo $title[2];
                    ?></td>
                    <td><?php
                    echo Category(2);
                    ?></td>
                    <td><?php
                    echo $comment[2];
                    ?></td>
                    <td><?php
                    echo $created[2];
                    ?></td>
                </tr>
                <tr>
                <td><?php
                      echo $id[3];
                    ?> </td>
                    <td><?php
                    echo $title[3];
                    ?></td>
                    <td><?php
                    echo Category(3);
                    ?></td>
                    <td><?php
                    echo $comment[3];
                    ?></td>
                    <td><?php
                    echo $created[3];
                    ?></td>
                </tr>
                <tr>
                   <td><?php
                      echo $id[4];
                    ?> </td>
                    <td><?php
                    echo $title[4];
                    ?></td>
                    <td><?php
                    echo Category(4);
                    ?></td>
                    <td><?php
                    echo $comment[4];
                    ?></td>
                    <td><?php
                    echo $created[4];
                    ?></td>
                </tr>
            </tbody>
        </table>

    </section>
    <footer>
     <p>Y&I group.inc</p>
    </footer>
    
</body>
</html>