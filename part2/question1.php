<?php
/* 
Question 1

Write a PHP program to return an array with any missing number(s) from an input array.

Example Input : 1,2,3,6,7,8 | Result: [4,5]
Example Input: 2, 5, 1, 8, 9 | Result: [3, 4, 6, 7]
*/

function findMissingNumbers($arr) {
    $min = min($arr);
    $max = max($arr);

    $fullRange = range($min, $max);

    $missing = array_diff($fullRange, $arr);

    return $missing;
}

$input = [1,2,3,6,7,8];
$result = findMissingNumbers($input);
print_r($result);