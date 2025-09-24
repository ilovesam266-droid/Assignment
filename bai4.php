<?php
$randArr = [];
for($i = 0; $i < 20; $i++){
    $randArr[] = rand(1, 100);
}
// print_r($randArr);


// print_r(max($randArr)."  ");
// print_r(min($randArr)."  ");
// print_r(array_sum($randArr)/count($randArr)."  ");
$evenCount =$oddCount = 0;
for ($i = 0; $i < 20; $i++){
    if($randArr[$i]%2 == 0){
        $evenCount++;
    }else {
        $oddCount++;
    }
}
print_r($evenCount."  ".$oddCount);
