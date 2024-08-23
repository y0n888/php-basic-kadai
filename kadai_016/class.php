<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
 
<body>
    <p>

        <?php
            // Foodクラス作成　
            class Food {
                // プロパティ（name,price)を定義
                private $name;
                private $price;
                // メソッド（priceプロパティを出力）を定義
                public function show_price() {
        
                    echo $this->price . '<br>';
                }
                // コンストラクタ（）を定義
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }
            }


            // Animalクラス作成
            class Animal {
                // プロパティ（name,height,weight）を定義
                private $name;
                private $height;
                private $weight;
                // メソッド（heightプロパティを出力）を定義
                public function show_height() {
                    echo $this->height . '<br>';
                }
                // コンストラクタ（）を定義
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }

            // インスタンス化する（それぞれのクラス）
            $food = new Food('potato', 250);
            $animal = new Animal('dog', 60, 5000);
            
            // インスタンス出力
            print_r($food);
            echo '<br>';
            print_r($animal);
            echo '<br>';
            
            // メソッドにアクセス、実行
            $food->show_price();
            $animal->show_height();
        ?>

    </p>
</body>