<?php
header('Content-Type: text/html; charset=UTF-8');
$figure = $_POST['figure'];
?>
<p><?php echo date("Y/m/d", time()); ?>の運勢は<br>
選ばれた数字は<?php 
$array = str_split($figure,1);
$choose = array_rand($array,1);
$result = $array[$choose];
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