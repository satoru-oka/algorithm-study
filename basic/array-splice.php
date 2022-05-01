<?php

// 任意の場所の要素を取りだす
$array = [0, 1, 2, 3, 4, 5];
$sub = array_splice($array, 3, 5);
//第２引数で指定している数値分を削除
print_r($array);
//削除され残りの要素を第3引数で指定している数値分取り出す
print_r($sub);

// slice

