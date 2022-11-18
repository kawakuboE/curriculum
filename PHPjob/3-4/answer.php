<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF- 8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p class="answer_p"><!--POST通信で送られてきた名前を表示-->
<?php 
$name = $_POST['name'];
echo $name;
?>
さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
$answer1 = $_POST["port"];
$correct1 = $_POST['correct1'];

if($answer1 == $correct1){
    echo "正解！";
}else{
    echo "不正解・・・";
}
?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
$answer2 = $_POST["launguage"];
$correct2 = $_POST['correct2'];

if($answer2 == $correct2){
    echo "正解！";
}else{
    echo "不正解・・・";
}
?>


<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
$answer3 = $_POST["command"];
$correct3 = $_POST['correct3'];

if($answer3 == "$correct3"){
    echo "正解！";
}else{
    echo "不正解・・・";
}
?>
</body>
