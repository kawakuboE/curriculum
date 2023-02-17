<?php
echo "count（要素の数を数える）";
$members = ["aa", "bb", "cc"];
echo count($members);

echo "<br>";

echo "sort（要素の並べ替えアルファベット順）";
$members = ["iii", "www", "fff", "qqq", "aaa"];
sort($members);
var_dump($members);

echo "<br>";

echo "sort（要素の並べ替え数字順）";
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);

echo "<br>";

echo "in_array（配列に中にある要素が存在しているか）";
$members = ["mimimi", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("mimimi", $members));

echo "<br>";

echo "in_array（配列に中にある要素が存在しているか）";
$members = ["tanaka", "kawakubo", "kimura", "yoshida", "uchida"];
if (in_array("kawakubo", $members)) {
    echo "川久保さんがいるよ！";
} else {
    echo "川久保さんはいないよ！";
}

echo "<br>";

echo "implode（配列を結合して文字列に変換）";
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("と", $members);
var_dump($atstr);

echo "<br>";

echo "explode（文字列を指定の区切りで配列にする）";
$members = ["あああ", "いいい", "ううう", "えええ", "おおお"];
$atstr = implode("@", $members);
var_dump($atstr);

echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);

echo "<br>";

echo "explode（数字の文字列を配列にする）";
$str = "1,2,3,4,5";
$array = explode(",",$str);

?>