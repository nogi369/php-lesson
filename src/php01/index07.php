<?php

// 配列
// $people = array('Taro', 'Jiro', 'Saburo');

// 配列の出力
// var_dump($people);

// echo '<br />';


// 個別の値へのアクセス
// echo $people[0];


// 連想配列
// $people = array(
//   'person1' => 'Taro',
//   'person2' => 'Jiro',
//   'person' => 'Saburo'
// );

// var_dump($people);


// 「array」を省略した連想配列の作成方法
// $people = [
//   'person1' => 'taro',
//   'person2' => 'jiro',
// ];

// var_dump($people);


// 多次元配列
// $people = [
//   [
//     "last_name" => "山田",
//     "first_name" => "太郎",
//     "age" => 29,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "鈴木",
//     "first_name" => "次郎",
//     "age" => 25,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "佐藤",
//     "first_name" => "花子",
//     "age" => 20,
//     "gender" => "女性"
//   ]
// ];

// var_dump($people);


// foreach文
// $people = array('Taro', 'Jiro', 'Saburo');

// foreach ($people as $person) {
//   echo $person;
//   echo '<br />';
// }

// PHP で配列のループ処理の場合に添字を取得する方法
// $people = array(
//   'person1' => 'Taro',
//   'person2' => 'Jiro',
//   'person3' => 'Saburo'
// );

// foreach ($people as $person => $name) {
//   print $person . "は" . $name . "です" . '<br />';
// }


// Q. foreach文をつかって多次元配列の値をすべて出力してみましょう。
// Taro(25歳men)
// Jiro(20歳men)
// hanako(16歳women)

$people = array(
  ["name" => "Taro", "age" => 25, "gender" => "men"],
  ["name" => "Jiro", "age" => 20, "gender" => "men"],
  ["name" => "hanako", "age" => 16, "gender" => "woman"]
);

foreach ($people as $person) {
  print $person["name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")" . '<br />';
}