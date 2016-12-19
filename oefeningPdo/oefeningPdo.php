<?php
try{
      echo 'connecting to database...';
      $pdo = new \PDO('mysql:host=localhost;dbname=oleggolovchenko;charset=utf8mb4','olegg','');
      echo "done</br>";
      echo "getting data...";
      $result = $pdo->prepare("call ArticleSelectAll");
      $result->execute();
      $data1 = $result->fetchAll(\PDO::FETCH_ASSOC);
      $result = $pdo->prepare("call ArticleSelectOne(?)");
      $value = 1;
      $result->bindParam(1, $value, \PDO::PARAM_INT|\PDO::PARAM_INPUT_OUTPUT);
      $result->execute();
      $data2 = $result->fetchAll(\PDO::FETCH_ASSOC);
      echo 'done';
}catch(\PDOException $e){
      echo $e->getMessage();
      
}
?>
<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <title>Pdo</title>
</head>
<body>
      <?php
            echo "</br>";
            foreach($data1 as $drow){
                  foreach($drow as $dcol){
                        echo $dcol." ";
                  }
                  echo "</br>";
            }
      ?>
      <?php
            foreach($data2 as $drow){
                  foreach($drow as $dcol){
                        echo $dcol." ";
                  }
                  echo "</br>";
            }
      ?>
</body>
</html>