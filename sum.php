<?php
function kakezan($k1) {
    //$k1に２をかける
    $result=$k1*2;
    return $result;
    }
    //関数を実行
echo kakezan(10);
echo "\n";
function print_number(){
    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
echo print_number();
echo "\n";
$string = "ABCDEF";
echo strlen($string);
echo "\n";
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
echo "\n";
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
echo "\n";
$array=array(2,5,9,7,3,1,8,6,4);
arsort($array);
print_r($array);
?>