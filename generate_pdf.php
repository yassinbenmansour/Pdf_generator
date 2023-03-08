<?php
require __DIR__ . "/fpdf185/fpdf.php";


$Fullname = $_POST["fullname"];
$Adress = $_POST["address"];
$Tel = $_POST["phone"];
$codeM = $_POST["codeMassar"];
$moy = $_POST["moy"];



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


$pdf->Output();

?>