<?php 
header('Content-Type: text/html; charset=UTF-8');

function challenge($base,$height,$long){
 $answer = $base * $height * $long;
 echo $answer;
}

challenge(5,10,8)

?>