<?php
require "fpdf.php";
     
function repieza(){

class PDF extends FPDF{}

$pdf=new FPDF('p','mm','Letter');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();
$server = "localhost";
    $user = "root";
    $password = "";
    $base = "estilo";
    $link = mysql_connect($server, $user, $password) or die("Error Conectando la Base de Datos");
    mysql_select_db($base,$link) or die("Error en la seleccion de la base de datos");
$sql=("SELECT idpieza,nombre,alto,ancho,precio FROM pieza");  
    
$pdf->Image("img/ticket.png");
$pdf->SetFont("Arial", "b", 12);
$pdf->Cell(0, 19, utf8_decode(""), 0, 1,'C');

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFont("Arial", "b", 11);
$pdf->MultiCell(30, 5, utf8_decode("ID"), 0, 1, 'L',0);
$pdf->SetXY($x + 40, $y);
$pdf->MultiCell(35, 5, utf8_decode("Name"), 0, 1, 'L',0);
$pdf->SetXY($x + 80, $y);
$pdf->MultiCell(35, 5, utf8_decode("High"), 0, 1, 'L',0);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 5, utf8_decode("Width"), 0, 1, 'L',0);
$pdf->SetXY($x + 165, $y);
$pdf->MultiCell(35, 5, utf8_decode("Price"), 0, 1, 'L',0);
$pdf->SetXY($x + 215, $y);
$pdf->Ln();
$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
    $idpieza=$row['0'];
    $nombre=$row['1'];
    $alto=$row['2'];
    $ancho=$row['3'];
    $precio=$row['4'];
    
    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont("Arial", "", 10);
    $pdf->MultiCell(30, 5, utf8_decode("$idpieza"), 0, 1, 'L',0);
    $pdf->SetXY($x + 40, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$nombre"), 0, 1, 'L',0);
    $pdf->SetXY($x + 80, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$alto"), 0, 1, 'L',0);
    $pdf->SetXY($x + 125, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$ancho"), 0, 1, 'L',0);
    $pdf->SetXY($x + 165, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$precio"), 0, 1, 'L',0);
    $pdf->SetXY($x + 215, $y);
    $pdf->Ln();
}
   
$pdf->Output();
}repieza();
?>