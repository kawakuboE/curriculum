<?php
$figure = $_POST['figure'];
?>
<p><?php echo date("Y/m/d", time()); ?>の運勢は<br>
選ばれた数字は<?php 
$array = str_split($figure,1); //入力された数字の羅列を1区切りずつ配列に変換して配列$arrayを設定。
$choose = array_rand($array,1); //その配列からランダムにキーを一つを選んで変数$chooseに格納。
$result = $array[$choose]; //そのキーの値を変数$resultに入れる。
echo $result;
?>
<br>
<?php 
if($result == 0){
    echo "凶";
}elseif($result >= 1 and $result <= 3){
    echo "小吉";
}elseif($result >= 4 and $result <= 6){
    echo "中吉";
}elseif($result >= 7 and $result <= 8){
    echo "吉";
}else{
    echo "大吉";
}
?>
</p>