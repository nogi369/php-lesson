<?php
// $name = "Tanaka";
// echo $name;

// 算術演算子
// $a = 15;
// $b = 3;
// $c = 10;
// $d = 5;
// echo $a;
// echo $b;
// echo $c;

// 18
// $answer18 = $a + $b;
// echo $answer18;

// echo "<br />";

// 12
// $answer12 = $a - $b;
// echo $answer12;

// echo "<br />";

// 45
// $answer45 = $a * $b;
// echo $answer45;

// echo "<br />";

// 5
// $answer5a = $answer45 / $b / $b;
// echo $answer5a;
// 模範解答4
// $answer4 = $a /$b;
// echo $answer4;

// echo "<br />";

// 5
// $answer5b = $a % $c;
// echo $answer5b;
// $answer5 = $a % $c;
// echo $answer5;


// 複合演算子

// 3
// $answer3 = $a /= $d;
// echo $answer3;
// 模範解答1
// $a = $b;
// echo $a;

// echo "<br />";

// 15
// $answer15 = $c += $d;
// echo $answer15;
// 模範解答2
// $c += $d;
// echo $c;


// 比較演算子

// $a = 20;
// $b = 5;

// $answer = $a > $b;
// echo $answer;

// echo "<br />";

// 模範解答
// echo ($a > $b);
// echo "<br />";


// 論理演算子

// base
// $a = 20;
// $b = 5;

// prepare
// $c = 10;
// $d = 30;

// $aが10より大きいかつ30より小さい
// echo ($a > $c && $a < $d);


// 加算子と減算子

// ＝＝＝＝＝
// Q. 加算子と減算子を利用し、出力結果が以下のようなコードを記述しましょう。
// 11
// 10
// 4
// 5
// ＝＝＝＝＝

// base
$a = 10;
$b = 10;
$c = 5;
$d = 5;

// 11
++$a;
echo $a;
echo "<br />";
// 10
$a--;
echo $a;
echo "<br />";
// 4
--$c;
echo $c;
echo "<br />";
// 5
$c++;
echo $c;