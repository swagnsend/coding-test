/* 
Question 1

Write a PHP program to return an array with any missing number(s) from an input array.

Example Input : 1,2,3,6,7,8 | Result: [4,5]
Example Input: 2, 5, 1, 8, 9 | Result: [3, 4, 6, 7]
*/



<?php
function findMissingNumbers($arr) {
    if (empty($arr))
    {
     return [];
    }

    $arr = array_unique($arr);
    sort($arr);

    $minVal = min($arr);
    $maxVal = max($arr);
    $missingValues = [];

    for ($i = $minVal; $i <= $maxVal; $i++) {
        if (!in_array($i, $arr)) {
            $missingValues[] = $i;
        }
    }
    return $missingValues;
}

$input1 = [1, 2, 3, 6, 7, 8];
print_r(findMissingNumbers($input1)); 

?>
