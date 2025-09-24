<?php

$list1 = $list2 = [];
for ($i = 0; $i < 150; $i++){
    if($i<100) {$list1[$i]=rand(6,666);} 
    $list2[$i] = rand(6,666);
}
$matchList = [];
for($i = 0; $i < 100; $i++){
    if(in_array($list1[$i], $list2) && !in_array($list1[$i], $matchList)){
        array_push($matchList, $list1[$i]);
    }
}
print_r($matchList);
$notMatchList = [];
for($i = 0; $i < 100; $i++){
    if(!in_array($list1[$i], $matchList)&& !in_array($list1[$i], $notMatchList)){
        array_push($notMatchList, $list1[$i]);
    }
}
print_r($notMatchList);