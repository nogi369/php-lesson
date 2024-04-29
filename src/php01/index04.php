<?php

// if文

// ＝＝＝＝＝
// Q1. if 文を利用して結果が以下のようになるコードを記述しましょう。

// base
// $a = 5;

// if ($a == 5) {
//   echo "{$a}は5です";
// }

// echo "<br />";

// echo "$a";
// echo "<br />";
// echo '' . $a;

// 模範解答
// if ($a === 5) {
//   echo "\$aは5です";
// }

// ＝＝＝＝＝


// if ~ else文

// ＝＝＝＝＝
// Q2. if ~ else 文を使用して、結果が以下のようになるコードを記述しましょう。

// base
// $a = 7;

// if ($a === 5) {
//   echo "\$aは5です";
// } else {
//   echo "\$aは7です";
// }

// 模範解答
// if ($a === 5) {
//   echo "\$aは5です";
// } else {
//   echo "\$aは5以外です";
// }

// ＝＝＝＝＝


// if ~ elseif文 ~ else文

// ＝＝＝＝＝
// Q3. 変数 a に 7 を代入し、if ~ elseif ~ else 文を使用して、結果が以下のようになるコードを記述しましょう。

// base
// $a = 7;

// if ($a === 5) {
//   echo "\$aは5です";
// } elseif ($a === 7) {
//   echo "\$aは7です";
// } else {
//   echo "\$aは5以外です";
// }

// 模範解答
// $a = 7;

// if ($a === 5) {
// echo "\$aは5です";
// }elseif ($a === 7){
// echo "\$aは7です";
// }else{
// echo "\$aは5と7以外です";
// }

// ＝＝＝＝＝


// switch文

// ＝＝＝＝＝
// Q. switch 文を使用して、結果が以下のようになるコードを記述しましょう。

// base
// $people = "Saburo";

// switch ($people) {
//   case "Ichiro":
//     echo "Ichiroです";
//     break;
//   case "Jiro":
//     echo "Jiroです";
//     break;
//   case "Saburo":
//     echo "Saburoです";
// }

// 模範解答
// $people = "Saburo";

// switch ($people) {
//   case "Taro":
//     echo "太郎です";
//     break;
//   case "Jiro":
//     echo "次郎です";
//     break;
//   case "Saburo":
//     echo "三郎です";
// }

// ＝＝＝＝＝


// 三項演算子

// ＝＝＝＝＝
// Q. 三項演算子を使用して、結果が以下のようになるコードを記述しましょう。

// base
// $a = 7;
// $result = $a === 7 ? "TRUE" : "FALSE";
// echo $result;

// 模範解答
$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;