<?php
// array initializations
$array = [1, 2, 3];

// Add to the end
$array[] = 4;
array_push($array, 5);
array_unshift($array, 0);
print_r($array);

// Delete leading value
$value_delete1 = array_shift($array);
echo $value_delete1 . PHP_EOL;
// Delete value last value the array
$value_delete2 = array_pop($array);
echo $value_delete2 . PHP_EOL;
print_r($array);