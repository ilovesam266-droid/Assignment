<?php

$randList = [];

for($i = 0; $i <100; $i++){
    $randList[]= rand(0,50);
}

// print_r($randList);

$sortedList = $randList;
sort($sortedList);

$rsortedList = array_reverse($sortedList);
$topDown50List = array_slice($rsortedList, 0, 50);

// print_r($topDown50List);
for ($i = 0, $topDown50ListTemp = $topDown50List; $i < 100; $i++){
    if(in_array($randList[$i], $topDown50ListTemp) && !empty($topDown50ListTemp)){
        $key = array_search($randList[$i], $topDown50ListTemp);
        unset($topDown50ListTemp[$key]);
        unset($randList[$i]);
    }elseif(empty($topDown50ListTemp)) break;
}
// var_dump(print_r(count($randList)));
$answer = array_merge($topDown50List, $randList);
// print_r($answer);

$i = 0;
$list10 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
while($i<=9){
    if(in_array($list10[$i], $randList)){
        $key = array_search($list10[$i],$randList);
        unset($list10[$i]);
        $randList[$key] = '0'.$randList[$key];
    }
    $i++;
}
print_r($randList);


