<?php
    echo "ceil（切り上げ）";
    $x = 9.4;
    echo ceil($x);

    echo "<br>";

    echo "floor（切り捨て）";
    $x = 12.3;
    echo floor($x);

    echo "<br>";

    echo "round（四捨五入）";
    $x = 2.5;
    echo round($x);

    echo "<br>";

    echo "pi（円周率）";
    echo pi();
    
    echo "<br>";
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    echo "半径が2の円の面積の計算";
    circleArea(3);

    echo "<br>";

    echo "mt_rand（乱数）";
    echo mt_rand(1, 100);

    echo "<br>";

    echo "strlen（文字列の長さ）";
    $str = "tanoshiina";
    echo strlen($str);

    echo "<br>";

    echo "strpos（検索）";
    $str = "kawakubo";
    echo strpos($str, "a");

    echo "<br>";

    echo "substr（文字列の切り取り）";
    $str = "kawakubo";
    echo substr($str, 0, 2);

    echo "<br>";

    echo "str_replace（置換）";
    $str = "kawakubo";
    echo str_replace("kawa", "KAWA", $str);

    echo "<br>";

    echo "str_replace（空白を削除）";
    $str = "I am kawakubo";
    echo str_replace(" ", "", $str);

    echo "<br>";

    echo "printf（フォーマット化した文字列を出力）";
    $name = "川久保さん";
    $limit_number = 5;
    printf("%sの残り時間はあと%02d分です", $name, $limit_number);

    echo "<br>";

    echo "sprintf（変数に代入できるprintf）";
    $limit_hour = 5;
    $limit_minute = 2;
    
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;


    ?>