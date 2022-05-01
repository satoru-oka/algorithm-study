<?php
$array = [0, 1, 2, 3, 4, 5, 10, 11, 12];

$result = array_filter($array, function($v)
{
    return ($v % 2 == 1);
});
print_r($result);

// $array = [0, 1, 2, 3, 4, 5, 10, 11, 12];
// $callback = function ($v) { return ($v % 2 == 1); }; }

// call function
// $result = print_filter($array, $callback);
// print_r($result);