<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する
             public $name;
             public $price;
        
 
         // コンストラクタ
         public function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
         }
 
         // priceを表示するメソッド
         public function show_price(){
            echo "Price" . $this->price . "\n";
         }
        }

        //Animalクラスの定義
        class Animal{
            public $name;
            public $height;
            public $weight;
 
         // コンストラクタ
         public function __construct($name, $height, $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
         }
         //heigjtを表示するメソッド
         public function show_height(){
            echo "Height:". $this->height ."\n";
         }
        }

        //Foodクラスのインスタンス作成
        $apple = new Food("りんご", 100);
        print_r($apple);
        $apple->show_price();
        echo "\n";

        //Animalクラスのインスタンス作成
        $lion = new Animal("ライオン", 120, 200);
        print_r($lion);
        $lion->show_height();
         ?>
     </p>
 </body>
 
 </html>