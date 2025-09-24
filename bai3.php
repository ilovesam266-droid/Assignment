<?php
$str = "IT001=>ITSU0005
IT001=>ITSU0017
IT001=>ITSU0021
IT001=>ITSU0026
IT001=>ITSU0015
IT001=>ITSU0025";

$arr = explode("\n",$str);
$newArr = [];
foreach($arr as $val){
    $tempArr = explode("=>", $val);
    $newArr[] = [$tempArr[0] => $tempArr[1]];
}

print_r($newArr);