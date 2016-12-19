<?php
include("Notice.php");
include("Noticeboard.php");
$board = new Og\Noticeboard();
if(isset($_POST["owner"])&&isset($_POST["text"])){
      $board->place(new Og\Notice($_POST["owner"],$_POST["text"],date("d-m-Y H:i:s")));
}

if(isset($_POST["notices"])){
      $board->remove($_POST["notices"]);
}
?>
<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <title>Document</title>
</head>
<body>
      <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <label for="owner"> Naam </label>
                  <input id="owner" name ="owner" type="text">
                  <label for="text"> Bericht </label>
                  <input id="text" name ="text" type="text">
                  <button type="submit">Toevoegen</button>
            </form>
      </div>
      <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <table border = "1">
                              <?php
                                    $i=0;
                                    $j=0;
                                    echo "<tr>";
                                    foreach ($board->notices as $notice) {
                                          if($i<5){
                                                echo "<td>";
                                                echo $notice->display();
                                                echo '<input type="radio" name="notices" value="'.$j.'">';
                                                echo "</td>";
                                                $i++;
                                          }else{
                                                echo "</tr>\n<tr>";
                                                $i=0;
                                                echo "<td>";
                                                echo $notice->display();
                                                echo '<input type="radio" name="notices" value="'.$j.'">';
                                                echo "</td>";
                                                $i++;
                                          }
                                          $j++;
                                    }
                              ?>
                        </tr>
                  </table>
                  <button type="submit"> Verwijderen</button>
            </form>
      </div>
</body>
</html>