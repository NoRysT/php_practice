<?php
$name = "Yasu";

if ($name =="Yasu"){
    echo "あなたの名前は".$name;
}else{
    echo "あなたの名前ではありません";
}

$total = 1;

for ($n = 1; $n <= 10000; $n ++){
    $total += $n;
}
echo "$total";

$fruits = array ("バナナ","ライチ","スイカ","ナシ","カキ");

foreach ($fruits as $fruit){
    echo "果物は". $fruit;
    echo "\n";
}

$start = 1;

$end = 100;

for ($i = $start; $i <= $end; $i++){
    if (($i % 5) == 0 ){
        echo "$i";
        echo "\n";
    }
}
