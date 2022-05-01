<?php
// 配列を適当な順番で初期化
$a = [0, 1];
$a[5] = 5;
$a[4] = 4;
$a[2] = 2;
$a[3] = 3;

//  forとforeachのデータ出力の違い
for ($i = 0; $i < count($a); $i++)
{ 
    echo $a[$i] . PHP_EOL;
}

echo "----" . PHP_EOL;

foreach ($a as $e)
{
    echo $e . PHP_EOL;
}
