<?php
require_once 'queue_class.php';

// キューにデータを追加
$q = new Queue();
$q->enqueue("Panda");
$q->enqueue("Golila");
$q->enqueue("Bird");

// キューのデータを全て表示
while ($q->length() > 0) {
    $e = $q->dequeue();
    echo "[$e]" . PHP_EOL;
}

var_dump($e);