<?php
$a=3;
$b=7;
echo $a+$b;

$array_month = ["１月","２月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月"];
echo $array_month [7];

$hello = "Hello, ";
$name = "Yas";
$world = "'s World!";
echo $hello.$name.$world;

$tech_boost = "tech ";
$tech_boost .="boost";
echo $tech_boost;

$calendar_2018 = [
    "January" => "１月",
    "February" => "２月",
    "March" => "３月",
    "April" => "４月",
    "May" => "５月",
    "June" => "６月",
    "July"=> "７月",
    "August"=> "８月",
    "September"=> "９月",
    "Octorber"=> "１０月",
    "November"=> "１１月",
    "December"=> "１２月",
];

echo $calendar_2018 ["December"];
