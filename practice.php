<?php
$array_month = ["１月", "２月", "３月", "４月", "５月", "６月", "７月", "８月", "９月", "１０月", "１１月", "１２月"];
echo $array_month[7];
echo "\n";
$name = "あずさ";
if ($name == "あずさ") {
    echo "私はあずさです";
} else {
    echo "あずさではありません";
}
echo "\n";
$total = 0;
// $iが０から始まり、$iが１００００以下の間繰り返し処理で足し算を行う。
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
//=> 50005000と表示される
echo "\n";
$fruits = array("apple", "orange", "peach", "grape", "melon");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {
    // 5で割り切れたら{}内を実行する
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}   