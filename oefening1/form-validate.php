
<?php
$Proderr='';
$Prijserr='';

if(isset($_POST['product']){
      $prod = $_POST['product'];
      var_dump($prod);
      var_dump(empty($prod));
      if(empty($prod)){
            $Proderr = 'product leeg';
      }
}

if(isset($_POST['prijs'])){
      $price = $_POST['prijs'];
      if(empty($price)){
            $Prijserr = 'prijs leeg';
      }
      if(!preg_match('/^[0-9]+(\.[0-9]{1,2})?$',$price)){
            $Prijserr = 'prijs moet decimal met 2 cijfers achter komma zijn';
      }
}
?>

<!DOCTYPE html>
<html lang="en">
      <meta charset="UTF-8">
      <title>
            Formulier validate
      </title>
</html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input id="product" type="text" name="product" placeHolder="product" required/>
      <span><php?echo $Proderr;?></span>
      <br/>
      <input id="prijs" type="text" name="prijs" placeHolder="prijs" required pattern="^[0-9]+(\.[0-9]{1,2})?$"/>
      <span><php?echo $Prijserr;?></span>
      <br/>
      <button type="submit">Send</button>
      
      <div>
            <p><php? echo $_POST['product']?></p>
            <p><php? echo $_POST['prijs']?></p>
      </div>
</form>
</body>