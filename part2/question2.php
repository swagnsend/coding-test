/* 
Question 2

Write a PHP program to reverse the digits of an integer.
Sample :
x = 234, return 432
x = -234, return -432
*/

<?php

$num = -234;
function reverseInt($num)
{
    $sign = $num < 0 ? -1 : 1; 
    $num = abs($num);  
    $numToString =(string)$num;         
    $reversed = (int)strrev($numToString);
    return $sign * $reversed;
}

echo reverseInt($num);

?>



