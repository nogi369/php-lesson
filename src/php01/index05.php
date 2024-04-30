<?php

// for文

// 基礎構文
// for ($i = 初期値; $i <= 回数; 増減式) {
//   処理
//   }

// 例
// for ($i = 0; $i < 4; $i++) {
//   echo $i;
// }

// ＝＝＝＝＝
// Q. for文を使用して、結果が以下のようになるコードを記述しましょう。

// 自分解答
// for ($i = 2; $i <= 10; $i = $i + 2) {
//   echo $i. "<br />";
// }

// 模範解答
// for ($i = 1; $i <= 5; $i++) {
//   echo $i * 2 . '<br />';
// }
// ＝＝＝＝＝


// while文

// 基礎構文
// while (条件) {
//   真の時に実行
//   繰り返しの処理の中で変数の値を変化させる
//   }

// ＝＝＝＝＝
// Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。

// 自分解答
// $count = 0;
// while ($count <= 20) {
//   echo $count . '<br />';
//   $count += 1;
// }

// 模範解答
// $count = 0;

// while ($count < 20) {
//   $count += 1;
//   echo $count . '<br />';
// }

// ＝＝＝＝＝


// breakの使い方

// $iが5の時、ループから抜ける。
// $i = 0;
// while ($i < 10) {
//   if ($i == 5) {
//     break;
//   }
//   echo $i;
//   $i++;
// }


// continueの使い方

// $iが5の時、$iに1を足す処理をし、スキップをする。
// $i = 0;
// while ($i < 10) {
//   if ($i == 5) {
//     $i++;
//     continue;
//   }
//   echo $i;
//   $i++;
// }

// ＝＝＝＝＝
// Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。

// 自分の解答

// $count = 0;

// while ($count <= 100) {
//   if ($count % 3 == 0) {
//     $count ++;
//     continue;
//   } elseif ($count <= 20) {
//     break;
//   }
//   $count ++;
//   echo $count . '<br />';
// }

// 模範解答

// $count = 0;

// while ($count <= 100) {
//   if ($count === 20) {
//     break;
//   }
//   if ($count % 3 === 0) {
//     $count++;
//     continue;
//   }
//   echo $count . '<br />';
//   $count++;
// }

// ＝＝＝＝＝


// do...while文

// whileの条件式が真の時に実行
// do{
//   }while (条件式);

// ＝＝＝＝＝
// Q. do...while 文を使用して、結果が以下のようになるコードを記述しましょう。

// 自分の解答

// $num = 0;

// do {
//   echo 'num = ' . $num . '<br />';
//   $num += 1;
// } while ($num < 3);
// ＝＝＝＝＝


// 応用問題
// Q. FizzBuzz問題を解いてみよう

// 自分の解答
// for($count = 1; $count <= 50; $count++) {
//   if ($count %3 == 0 && $count % 5 == 0) {
//     echo 'FizzBuzz' . '<br />';
//   } elseif ($count % 3 == 0) {
//     echo 'Fizz' . '<br />';
//   } elseif ($count % 5 == 0) {
//     echo 'Buzz' . '<br />';
//   } else {
//     echo $count . '<br />';
//   }
// }

// 模範解答
// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";

// for ($i = 1; $i <= 50; $i++) {
//   if ($i % 15 == 0) {
//     echo $FizzBuzz;
//   } else if ($i % 3 == 0) {
//     echo $Fizz;
//   } else if ($i % 5 == 0) {
//     echo $Buzz;
//   } else {
//     echo $i;
//   }
// }


// Q. 二重ループを使用して、結果が以下のようになるコードを記述しましょう。

// 外側のループで行を処理
for ($i = 1; $i <= 5; $i++) {
  // 内側のループで列を処理
  for ($j = 1; $j <= 5; $j++) {
    echo '●';
  }
  echo '<br />';
}