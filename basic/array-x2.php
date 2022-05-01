<?php
$array = [1, 11, 111, 1111];
$response_array = array_map(function($v) {
    return ($v * 2);
}, $array);

print_r($response_array);