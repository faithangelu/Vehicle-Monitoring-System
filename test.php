<?php
require('php_packages/fpdf181/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo - Center Here
    $this->Image('images/sample.jpg',20,10,35);
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    $this->SetFillColor(255,255,255);
    $this->Cell(50);
    // Title
    $this->Cell(75,10,'Company Name',0,0,'L');
    $this->Cell(5);
    $this->SetFont('Arial','B',18);
    $this->Cell(60,10,'Purchase Order No.',0,1,'L');
    $this->SetFont('Arial','B',11);
    $this->Cell(50);
    $this->MultiCell(75,8,'Company Address',0,1,'L');
    $this->Cell(50);
    $this->Cell(60,8,'TIN',0,1,'L');
    $this->SetXY(140, 20);
    $this->SetFont('Arial','B',18);
    $this->Cell(60,10,'2018-0004',0,1,'C');
    $this->Ln(30);
    $this->SetFont('Arial','',6);
    $this->Cell(95,5,'VENDOR:','TLR',0,'L');
    $this->Cell(95,5,'DELIVER TO:','TLR',1,'L');
    $this->SetFont('Arial','',10);
    $this->Cell(95,7,'VENDOR NAME:','LR',0,'L');
    $this->Cell(95,7,'COMPANY NAME:','LR',1,'L');
    $this->Cell(95,9,'115 K-2ND STREET, KAMUNING, QUEZON CITY','BLR',0,'L');
    $this->Cell(95,9,'115 K-2ND STREET, KAMUNING, QUEZON CITY','BLR',1,'L');
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,1,1);
$pdf->Output();
?>