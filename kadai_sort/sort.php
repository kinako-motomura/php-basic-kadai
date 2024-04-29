<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        /// 独自のソート関数を作成
        function sort_2way ($array , $order) {
            
            //引数$orderは昇順かチェック
            if ($order === "ascending") {
            //trueの場合は昇順にソート
            sort($array);
            //falseの場合は降順にソート
            } else {
                rsort($array);
            }
            return($array);
        }
       
        //ソートする配列を宣言
        $array = [15, 4, 18, 23, 10];
       
        //関数を呼び出す。昇順の場合
        $sortedAscending = sort_2way($array, "ascending");
        echo "昇順にソート<br>";
        foreach ($sortedAscending as $value) {
        echo $value . "<br>" ;
        }
        
        // 関数を呼び出す。降順の場合
        $sortedDescending = sort_2way($array, "descending");
        echo "昇順にソート<br>";
        foreach ($sortedDescending as $value) {
        echo $value . "<br>" ;
        }
        ?>
    </p>
</body>

</html>