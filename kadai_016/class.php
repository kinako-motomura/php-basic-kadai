<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php       
        //Foodクラスを定義
        class Food {
            //Foodクラスのプロパティを定義
            private $name;
            private $price;
            //コンストラクタ
            public function __construct(string $name , int $price) {
                $this->name = $name; 
                $this->price = $price;
            }
            //メソッドの定義
            public function show_price(){
                echo $this->price . '<br>';
            }
        }

        //インスタンス化する
        $food = new Food('potato' , 300 );
        ?>
    </p>
    <P>
        <?php
        //アニマルクラスを定義
        class Animal {
            //Animalクラスのプロパティを定義
            private $name;
            private $height;
            private $weight;
            //コンストラクタ
            public function __construct(string $name , int $height , int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            //メソッドの定義
            public function show_weight(){
                echo $this->weight . '<br>';
            }
        }
    
        //インスタンス化する
        $animal = new Animal('トラ' , 60 , 90 );

        //プロパティの値を出力
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        echo $food->show_price();
        echo $animal->show_weight();
        ?>
    </p>
</body>

</html>