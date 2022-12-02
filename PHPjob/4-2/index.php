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
                $userName = new getData();
                $userName->getUserData();
                echo $userName;
                ?>
              </p>
            </div>
            <div class="logindate">

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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </section>
    <footer>

    </footer>
    
</body>
</html>