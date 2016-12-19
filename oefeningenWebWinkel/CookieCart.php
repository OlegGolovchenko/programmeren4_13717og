<?php
$shop = array();
$time = time()+(86400*7);
$i;
for($i=1;$i<11;$i++){
      array_push($shop,"item".$i);
}
if(isset($_COOKIE["card"])){
      $card = unserialize($_COOKIE["card"]);
}else{
      $card = array();
}
if(isset($_POST["items"])){
      array_push($card,$shop[$_POST["items"]]);
      
      setcookie("card",serialize($card),$time,"/");
}
?>

<!DOCTYPE html>
<html>
      <head>
            <title>Cookie oefening</title>
      </head>
      <body>
            <div>
                  <?php //var_dump($card)?>
                  <h1>Webwinkel van Oleg Golovchenko</h1>
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <label for="items">Items</label>
                        <select name="items" id="items">
                        <?php
                        $i;
                        for ($i=0;$i<count($shop);$i++) {
                              echo '<option value="'.$i.'">'.$shop[$i].'</option>';
                        } 
                        ?>
                        </select>
                        <button type="submit">add</button>
                  </form>
            </div>
            <div>
                  <h2>Shopping card</h2>
                  <ul>
                  <?php
                  foreach ($card as $bought) {
                        echo "<li>".$bought."</li>";
                  }
                  ?>
                  </ul> 
            </div>
      </body>
</html>