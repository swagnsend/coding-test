<?php
/* 
Question 2

Write a PHP program to reverse the digits of an integer.
Sample :
x = 234, return 432
x = -234, return -432
*/

function reverseInteger($x) {

    $isNegative = false;

    if ($x < 0) {
        $isNegative = true;
        $x = abs($x);
    }

    $reveredStr = strrev((string) $x);

    $reveredInt = intval($reveredStr);

    if($isNegative) {
        $reveredInt = -$reveredInt;
    }

    return $reveredInt;
}

// echo reverseInteger(234);
echo reverseInteger(-234);
