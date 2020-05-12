<?php
$height = 230;

if ($height < 150) {
    echo "150cm 未満不可";
} else if ($height >= 200){
    echo "200cm 以上不可";
} else{
    echo "ok";
}

$weekday = "月曜";

switch("weekday"){
    case "月曜":
        echo "可燃日";
        break;
    case"水曜":
        echo "資源日";
        break;
    default:
        echo "Not Today.";
        break;
}

function sum(){
    
    $result = 0;
    
    for($i =1; $i <= 10; $i++){
        $result += $i;
    }
    return $result;
    
}
echo sum();


function print_number(){
    for ($i =0; $i < 100; $i++){
        echo $i;

    }
}

$string = "ABCDEFGHIJK";
echo strlen($string);

$string = "I love Ruby boiiii!!!";
$new_string = str_replace("Ruby","PHP", $string);
echo $new_string;

$array = array(2,4,1,7,6,8,5,10,);

asort($array);
print_r($array);
arsort($array);
print_r($array);


        if($max_number<$arr[$a]){
            $max_number=$arr[$a];
        }
