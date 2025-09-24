<?php
$arr = [1, 2, 2, 3, 4, 4, 5, 6];
$tempCount = count($arr);
for($i = 0, $tempArr = []; $i < $tempCount; $i++){
    if(!in_array($arr[$i], $tempArr)){
        array_push($tempArr, $arr[$i]);
    }else{
        unset($arr[$i]);
    }
}
print_r($arr);

print_r(array_sum($arr));

print_r(array_reverse($arr));