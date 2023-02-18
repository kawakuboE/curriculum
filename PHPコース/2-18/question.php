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
<p class="question_p">お疲れ様です<!--POST通信で送られてきた名前を出力-->
<?php
$name = $_POST['name'];
echo $name;
?>さん</p>

<form action="answer.php" method="post">
<?php
echo "<input type=\"hidden\" name=\"name\" value=\"{$name}\">";
?>
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
  $port = [80, 22, 20,21];
  $correct1 = $port[0];
  echo "<input type=\"hidden\" name=\"correct1\" value=\"{$correct1}\">";

	foreach( $port as $value ){
		echo "<input type=\"radio\" name=\"port\" value=\"{$value}\">";

		echo $value;
}
?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
  $launguage = ["PHP", "Python", "Java","HTML"];
  $correct2 = $launguage[3];
  echo "<input type=\"hidden\" name=\"correct2\" value=\"{$correct2}\">";

  foreach( $launguage as $value ){
		echo "<input type=\"radio\" name=\"launguage\" value=\"{$value}\">";

		echo $value;
}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
  $command = ["join", "select", "insert","update"];
  $correct3 = $command[1];
  echo "<input type=\"hidden\" name=\"correct3\" value=\"{$correct3}\">";

  foreach( $command as $value ){
	echo "<input type=\"radio\" name=\"command\" value=\"{$value}\">";

		echo $value;
}
?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input class="answerbutton" type="submit" value="回答する">
</form>
</body>
