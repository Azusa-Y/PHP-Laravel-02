<?php
function kakezan($k1) {
    //$k1に２をかける
    $result=$k1*2;
    return $result;
    }
    //関数を実行
echo kakezan(10);
echo "\n";
function f($a,$b){
    $result = $a+$b;
    return $result;
}
echo f(1,10);
echo "\n";
$array = array(1,3,5,7,9);
function a($array){
    $result=1;
    foreach ($array as $array1) {
        $result *= $array1;
    }
    return $result;
}
echo a($array);
echo "\n";
$arr = array(10,3,5,7,9,20);
function max_array($arr){
    //とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number=$a;
        }
    }
    return $max_number;
}
echo max_array($arr);
echo "\n";
$text='<p>Sample.</p><a half = "https://aaa.com">aaa</a>';
echo strip_tags($text);
//指定した文字列からHTMLタグ、PHPタグを取り除く
echo "\n";
//＜p＞は許可（取り除かない）
echo strip_tags($text,'<p>');
echo "\n";
$fruit=array("apple","orange");
array_push($fruit,"peach","grape");
//配列の最後に要素を追加する
print_r($fruit);
echo "\n";
$text1=['配列の','要素の','最後に'];
$text2=['一つまたは','複数の'];
$text3=['配列を','結合する'];
$text=array_merge($text1,$text2,$text3);
print_r($text);
echo "\n";
echo time();
//現在のUNIXタイムスタンプを取得
echo "\n";
$time=mktime(0,0,0,23,7,2020);
echo $time;
echo "\n";
$date=date('Y/m/d');
//日付文字列を取得。様々な形式あり　n；月、d；日、w；曜日、'Y/m/d'など
echo $date;

echo "\n";