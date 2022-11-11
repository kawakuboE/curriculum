<?php
header('Content-Type: text/html; charset=UTF-8');

function fruitsFee() {
    $fruits = ["リンゴ" =>"300円","みかん"=>"150円","桃"=>"3000円"];
    foreach ($fruits as $key => $value) {
        $message = $key . "は" . $value . "です。";
        echo $message;
        echo "<br>";
    }
}

fruitsFee();
?>