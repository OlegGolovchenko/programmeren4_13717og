<a href="/oefeningMvc/postcode-3p-mvc.php/Home/Index">terug gaan</a>
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
                        $outerArr = $model -> getList();
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
                                    echo $outerArr[$row][$i];
                                    echo '</font>';
                                    echo "</td>";
                              }
                              echo "</tr>";
                        }
                  ?>
            </tbody>
      </table>