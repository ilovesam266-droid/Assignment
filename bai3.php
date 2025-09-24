<?php
$str = "IT001=>ITSU0005
IT001=>ITSU0017
IT001=>ITSU0021
IT002=>ITSU0026
IT001=>ITSU0015
IT001=>ITSU0025";

$arr = explode("\n",$str);
$newArr = [];
foreach($arr as $val){
    $tempArr = explode("=>", $val);
    if(array_key_exists($tempArr[0], $newArr)){
       $newArr[$tempArr[0]] = array_merge(
        is_array($newArr[$tempArr[0]]) ? $newArr[$tempArr[0]] : [$newArr[$tempArr[0]]], [$tempArr[1]]);
    }else{
        $newArr[$tempArr[0]] = $tempArr[1];
    }
}

print_r($newArr);