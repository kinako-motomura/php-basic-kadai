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
            
            //$orderがTRUEの場合は昇順、FALSEの場合は降順にソート
            if ($order === TRUE) {
                //trueの場合
                echo "昇順でソート<br>";
                sort ($array);
                //falseの場合
            } else {
                echo "降順でソート<br>";
                rsort($array);
            }  

            //配列の要素を一行ずつ出力
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }
       
        //ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        //昇順でソートして出力
        sort_2way ($nums , TRUE);
        //降順でソートして出力
        sort_2way ($nums , FALSE);

        ?>
    </p>
</body>

</html>