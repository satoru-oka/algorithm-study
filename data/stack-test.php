<?php
require_once 'stack_class.php';

// スタックにデータを追加
$t = new Stack();
$t->push("Panda");
$t->push("Tiger");
$t->push("Bird");

// スタックのデータを全て表示
while ($v = $t->pop()) {
    echo "[$v]" . PHP_EOL;
}