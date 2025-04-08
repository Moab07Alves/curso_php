<?php

$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];

print_r($arr1);
echo "<br>";

print_r($arr2);
echo "<br>";

$diff = array_diff($arr1, $arr2);

print_r($diff);
echo "<br>";

$arr3 = [4, 6];

$diff2 = array_diff($arr2, $arr1, $arr3);

print_r($diff2);
echo "<br>";