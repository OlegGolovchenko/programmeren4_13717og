<?php
include(dirname(dirname(__DIR__)).'/vendor/autoload.php');
$fileData;
$outerArr;
$fileData = file_get_contents("PostcodesUtf8.csv");
$outerArr = explode("\n",$fileData);

class PCPDF extends FPDF{
      function Header(){
            $this->SetFont('Arial','B',15);
            $this->Cell(80);
            $this->Cell(30,10,'Title',1,0,'C');
            $this->Ln(20);
      }
      
      function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      }
}
$pdf = new PCPDF();
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
                  <?php
                        $row;
                        for($row=0;$row<count($outerArr);$row++){
                              echo "<tr>";
                              $i;
                              $locName = "";
                              $col = explode("|",$outerArr[$row]);
                                    if($locName !== $col[3]){
                                          $pdf->addPage();
                                    }
                              echo "</tr>";
                        }
                  ?>
            </div>
      </body>
</html>