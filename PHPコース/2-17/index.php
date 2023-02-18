<?php

$saikorodArray = array();//サイコロの出た目を入れる配列を初期化。初期がしないとエラーになる。

for($n = 1;$n <=40; $n++){ //サイコロの目が全部１が出たとしても、最高40回までなので40までと設定。
    $saikoro = mt_rand(1, 6); //サイコロの目の乱数を変数に入れる。
    array_push($saikorodArray, $saikoro); //用意した$saikorodArray配列にサイコロの目を入れていく。
    echo $n."回目=".$saikoro; //表示させる。
    echo "<br>";
    
    if(array_sum($saikorodArray) >= 40){ //サイコロの目の合計は40以上出ればゴールするので、配列の合計が40以上になった場合を設定。
        echo "合計".$n."回でゴールしました";
        exit; //for文の繰り返しを止める。
       }
}




?>