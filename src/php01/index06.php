<?php

// 関数
// function 関数名(){
//   処理内容
//   return 返り値
//   }

// 引数と戻り値なし
// function outputHello()
// {
//   echo "Hello world";
// }

// outputHello();


// 引数と戻り値あり
// function text($number1, $number2)
// {
//   $value = $number1 + $number2;
//   return $value;
// }

// $total = text(2, 4);
// echo $total;


// Q. 関数を定義して、結果が以下のようになるコードを記述しましょう。
// 5
// function calc($number1, $number2)
// {
//   $value = $number1 * $number2;
//   return $value;
// }

// $result = calc(1, 5);
// echo $result;


// Q. 引数に $score1、$score2、$score3 を持ち、
// 合計点が 210 より大きい時「合計点は OO なので合格です」、
// そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。

// 自分の解答
  // function test($score1, $score2, $score3)
  // {
  //   $total = $score1 + $score2 + $score3;
  //   return $total;
  // }

  // $result = test(50, 70, 100);
  // if ($result > 210) {
  //   echo "合計点は $result なので合格です";
  // } else {
  //   echo "合計点は $result なので不合格です";
  // }

// 模範解答
// function exam($score1, $score2, $score3)
// {
//   $total = $score1 + $score2 + $score3;
//   if ($total > 210) {
//     echo $total . "点なので合格です";
//   } else {
//     echo $total . "点なので不合格です";
//   }
// }
// echo (exam(80, 60, 90));


// Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。

// 自分の解答
function triangle($bottom, $height)
{
  $result = $bottom * $height / 2;
  echo "三角形の面積 : " . $result . '<br />';
}

function square($height, $width)
{
  $result = $height * $width;
  echo "四角形の面積 : " . $result . '<br />';
}

function trapezoid($upper_base, $bottom_base, $height)
{
  $result = ($upper_base * $bottom_base) * $height / 2;
  echo "台形の面積 : " . $result . '<br />';
}

// 出力: 800
echo (triangle(80, 20));
// 出力: 2,500
echo (square(50, 50));
// 出力: 36,000
echo (trapezoid(40, 60, 30));

// 模範解答
// function getSquareArea($base, $height)
// {
//   return $base * $height;
// }
// function getTriangleArea($base, $height)
// {
//   return $base * $height / 2;
// }
// function getTrapezoidArea($upperBase, $lowerBase, $height)
// {
//   return ($upperBase + $lowerBase) * $height / 2;
// }

// echo getSquareArea(5, 5) . "\n";
// echo getTriangleArea(7, 8) . "\n";
// echo getTrapezoidArea(4, 5, 4);