<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編1</title>
 </head>
 
 <body>
     <p>
         <?php
         $produce_data = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
 
         //連想配列$prpduce_dataのキーと値を1つずつ順番に出力する
         foreach ($produce_data as $key => $value) {
             echo "{$key}:{$value}<br>";
         }
         ?>
     </p>
 </body>
 
 </html>