<!DOCTYPE html>
<html>
      <head>
            <title>Reservatie gevalideerd</title>
      </head>
      <body>
            <div>
                  <p>Reservatie is gemaakt voor:</p>
                  <p>
                        <?php
                              echo 'klant ';
                              if(isset($_POST["name"])&&(!empty($_POST["name"]))&&ctype_alpha($_POST["name"])){
                                    echo $_POST["name"].' ';
                              }else{
                                    echo 'naam is leeg of geeft niet aleen letters';
                              }
                              if(isset($_POST["lastname"])&&(!empty($_POST["lastname"]))&&ctype_alpha($_POST["lastname"])){
                                    echo $_POST["lastname"];
                              }else{
                                    echo 'naam is leeg of geeft niet aleen letters';
                              }
                              echo ' geboren op ';
                              if(isset($_POST["birth"])){
                                    $date = date_parse($_POST["birth"]);
                                    if ($date["error_count"] == 0 && checkdate($date["month"], $date["day"], $date["year"])){
                                          echo $_POST["birth"];
                                    }else{
                                          echo "Gebortendatum formmat is slecht";
                                    }
                              }
                              echo ' betalen met rekening ';
                              if(isset($_POST["bankaccount"])&&preg_match('/[a-z,A-Z]{2,2}[0-9]{2,2}[a-z,A-Z,0-9]{4,4}[0-9]{7,7}([a-z,A-Z,0-9]?){0,16}/',$_POST["bankaccount"])){
                                    echo $_POST["bankaccount"];
                              }else{
                                    echo 'IBAN is niet correct ingevoert';
                              }
                              echo ' geschreven met e-mail ';
                              if(isset($_POST["mail"])){
                                    echo $_POST["mail"];
                              }else{
                                    echo 'e-mail is leeg of niet geldig';
                              }
                        ?>
                  </p>
                  <p>
                        <?php
                              echo 'Gereserveerd ';
                              if(isset($_POST["npers"])&&(!empty($_POST["npers"]))&&ctype_digit($_POST["npers"])){
                                    echo $_POST["npers"];
                              }
                              echo ' plaatsen op balkon ';
                              if(isset($_POST["balkon"])){
                                    echo $_POST["balkon"];
                              }
                        ?>
                  </p>
            </div>
      </body>
</html>