<?php
/*
Write a PHP program to find a single element in an array where every element appears three times except for one.

Input : array(5, 3, 4, 3, 5, 5, 3)
*/

function singleNumber($arr){
    $count = [];
    $result = 0;
    foreach($arr as $num) {
        if(isset($count[$num])) {
            $count[$num] = $count[$num] + 1;
        } else {
            $count[$num] = 1;
        }
    }

    foreach($count as $key => $value) {
        if($value == 1) {
            $result = $key;
        }
    }

    return $result;
}

$input = [5, 3, 4, 3, 5, 5, 3];
$result = singleNumber($input);
print_r($result);