/*
Write a PHP program to find a single element in an array where every element appears three times except for one.

Input : array(5, 3, 4, 3, 5, 5, 3)
*/


<?php
function singleValue($arr) {
    $frequencyMap = [];
    foreach ($arr as $num) {
        if (!isset($frequencyMap[$num])) {
            $frequencyMap[$num] = 0;
        }
        $frequencyMap[$num]++;
    }
    foreach ($frequencyMap as $num => $count) {
        if ($count != 3) {
            return $num;
        }
    }
    return null; 
}

$input = [5, 3, 4, 3, 5, 5, 3];
echo singleValue($input); 
?>
