<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 変数に値を代入する
       echo $score1 = 80;
       echo '<br>';
       echo $score2 = 60;
       echo '<br>';
       echo $score3 = 55;
       echo '<br>';
       echo $score4 = 40;
       echo '<br>';
       echo $score5 = 100;
       echo '<br>';
       echo $score6 = 25;
       echo '<br>';
       echo $score7 = 80;
       echo '<br>';
       echo $score8 = 95;
       echo '<br>';
       echo $score9 = 30;
       echo '<br>';
       echo $score10 = 60;
       echo '<br>';

        //変数と数値を計算し、その結果を出力する(合計点)
        //echo $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

         //改行する
         echo '<br>';

         //変数と数値を計算し、その結果を出力する(平均点)
         echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;
        ?>
    </p>
</body>

</html>
