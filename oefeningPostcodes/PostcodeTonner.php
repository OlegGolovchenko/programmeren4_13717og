<?php
$fileData;
$outerArr;
$fileData = file_get_contents("PostcodesUtf8.csv");
$outerArr = explode("\n",$fileData);
?>

<!DOCTYPE html>
<html>
      <meta charset="UTF-8">
      <meta Content-Language: fr,nl,en>
      <head>
            <title>Postcodes</title>
      </head>
      <body>
            <div>
                  <table border="1" background="http://www.all-flags-world.com/country-flag/Belgium/flag-belgium-XL.jpg" >
                        <thead>
                              <tr>
                                    <th><font color="red">Postcode/Code postal</font></th>
                                    <th><font color="red">Plaatsnaam</font></th>
                                    <th><font color="black">Provincie</font></th>
                                    <th><font color="black">Localité</font></th>
                                    <th><font color="yellow">Province</font></th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              $row;
                              for($row=0;$row<count($outerArr);$row++){
                                    echo "<tr>";
                                    $i;
                                    $dark = "black";
                                    $yellow = "yellow";
                                    $red = "red";
                                    for($i=0;$i<5;$i++){
                                          echo "<td>";
                                          if($i<2){
                                                echo '<font color="'.$red.'">';
                                          }else if($i>1&&$i<4){
                                                echo '<font color="'.$dark.'">';
                                          }else if($i==4){
                                                echo '<font color="'.$yellow.'">';
                                          }
                                          echo explode("|",$outerArr[$row])[$i];
                                          echo '</font>';
                                          echo "</td>";
                                    }
                                    echo "</tr>";
                              }
                              ?>
                        </tbody>
                  </table>
            </div>
      </body>
</html>