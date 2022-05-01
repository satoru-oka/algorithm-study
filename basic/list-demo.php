<?php
// 線形リストまたは単にリスト
// 名簿リストを初期化
$list_of_name = array();

// 名簿リストに人を追加
$personal = array(
    "name" => "Nami",
    "age" => 18,
);
array_push($list_of_name, $personal);

// 名簿リストに人を追加
$personal = array(
    "name" => "Sanji",
    "age" => 20,
);
array_push($list_of_name, $personal);

// 名簿リストに人を追加
$personal = array(
    "name" => "Takahasi",
    "age" => 28,
);
array_push($list_of_name, $personal);

// ランダムに一件の名簿の内容を表示

$result_random_list = rand(0, count($list_of_name) - 1);
$is_personal = $list_of_name[$result_random_list];
echo "name:" . $is_personal["name"] . PHP_EOL;
echo "age:" . $is_personal["age"] . PHP_EOL;