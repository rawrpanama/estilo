<?php
require "fpdf.php";
     
function repmueble(){

class PDF extends FPDF{}

$pdf=new FPDF('p','mm','Letter');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();
include("../conexion.php");
conexion();
$sql=("SELECT idmueble,nombre,tipo,vis FROM mueble");  
    
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
$pdf->MultiCell(35, 5, utf8_decode("Kind of furniture"), 0, 1, 'L',0);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 5, utf8_decode("vis"), 0, 1, 'L',0);
$pdf->SetXY($x + 165, $y);
$pdf->Ln();
$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
    $idmueble=$row['0'];
    $nombre=$row['1'];
    $tipo=$row['2'];
    $vis=$row['3'];
    
    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont("Arial", "", 10);
    $pdf->MultiCell(30, 5, utf8_decode("$idmueble"), 0, 1, 'L',0);
    $pdf->SetXY($x + 40, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$nombre"), 0, 1, 'L',0);
    $pdf->SetXY($x + 80, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$tipo"), 0, 1, 'L',0);
    $pdf->SetXY($x + 125, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$vis"), 0, 1, 'L',0);
    $pdf->SetXY($x + 165, $y);
    $pdf->Ln();
}
   
$pdf->Output();
}repmueble();
?>