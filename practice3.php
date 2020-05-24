<?php

function x2($i){
    return ($i * 2);
}
echo x2(57);

function f($a,$b){
    return ($a+$b);
}

echo f(5,7);

$arr = array(1,3,5,7,9);

$result = $arr[0];
for ($i=1; $i<count($arr);$i++){
    $result *= $arr[$i];
}
echo $result;

function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a);{
    if ($max_number<$a){
    $max_number=$a;
    }    
    }
    return $max_number;
}
