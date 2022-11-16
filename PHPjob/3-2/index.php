<?php

$fruits = ["リンゴ"=>100,"みかん"=>30,"桃"=>300];
$number = [3,5,10];

function getPrice($fruits,$number) {
    $fee = $fruits * $number;
    return $fee;
}
$i = 0;
foreach ($fruits as $key => $value) {
    echo $key . "は" . getPrice($value,$number[$i]) . "円です。";
    echo "<br>";

    $i++;
    }
?>