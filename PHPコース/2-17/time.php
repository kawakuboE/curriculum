<?php

/* $timeNow = date("G", time()); */ //Gは0なしの時間表記
$timeNow = intval(date('H')); //Hは0ありの時間表記なのでintvalで0を省く。intvalは第2引数に何も入れなければ10進法の整数。
//intvalは値のデータ型を整数型に変換する関数。intval(値[,基数])

if($timeNow >= 4 && $timeNow <= 11){
    echo "今".$timeNow."時台です";
    echo "<br>";
    echo "おはようございます";
  }else if($timeNow >= 12 && $timeNow <= 17){
  echo "今".$timeNow."時台です";
  echo "<br>";
  echo "こんにちは";
}else{
  echo "今".$timeNow."時台です";
  echo "<br>";
  echo "こんばんは";
}


?>