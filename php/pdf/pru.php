<?php
require "fpdf.php";
session_start();
$id = $_SESSION['suser'];
     
function repusuarioes(){

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
$sql=("SELECT idreserva,total,fecha_ordenado,fecha_entrega FROM reserva WHERE iduser='".$id."'");  
    
$pdf->Image("img/ticket.png");
$pdf->SetFont("Arial", "b", 12);
$pdf->Cell(0, 19, utf8_decode(""), 0, 1,'C');

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFont("Arial", "b", 11);
$pdf->MultiCell(30, 5, utf8_decode("Furniture code"), 0, 1, 'L',0);
$pdf->SetXY($x + 40, $y);
$pdf->MultiCell(35, 5, utf8_decode("Price"), 0, 1, 'L',0);
$pdf->SetXY($x + 80, $y);
$pdf->MultiCell(35, 5, utf8_decode("Order date"), 0, 1, 'L',0);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 5, utf8_decode("Delivery date"), 0, 1, 'L',0);
$pdf->SetXY($x + 165, $y);
$pdf->Ln();
$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
    $idreserva=$row['0'];
    $total=$row['1'];
    $fecha_ordenado=$row['2'];
    $fecha_entrega=$row['3'];
    
    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont("Arial", "", 10);
    $pdf->MultiCell(30, 5, utf8_decode("$idreserva"), 0, 1, 'L',0);
    $pdf->SetXY($x + 40, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$total"), 0, 1, 'L',0);
    $pdf->SetXY($x + 80, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$fecha_ordenado"), 0, 1, 'L',0);
    $pdf->SetXY($x + 125, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$fecha_entrega"), 0, 1, 'L',0);
    $pdf->SetXY($x + 165, $y);
    $pdf->Ln();
}
   
$pdf->Output();
}repusuarioes();
?>