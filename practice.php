<?php
echo'hollo php!' .PHP_EOL;

$a = 3;
$b = 7;
$c = $a + $b;
echo $c .PHP_EOL;

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7] .PHP_EOL;

$hello = "Hello,";
$name = "Hiromi";
$world = "'s World";
echo $hello.$name.$world .PHP_EOL;

$tech_boost = "tech";
$tech_boost.= "　boost";
echo $tech_boost .PHP_EOL;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"] .PHP_EOL;



$name = "hiromi";
if($name == "hiromi") {
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}

$total = 0;
for($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "peach", "cherry", "melon");
foreach ($fruits as $fruit) {
  echo "要素は".$fruit;
  echo "\n";
}


/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}



