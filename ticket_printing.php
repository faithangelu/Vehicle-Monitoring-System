<?php
//require 'connect.php'; /*** connection to database

//if(isset($_POST['submit'])) {

require_once('../php_packages/fpdf181/fpdf.php');
require_once('../php_packages/FPDI-1.6.1/fpdi.php');

$pdf = new FPDI('P','mm',array(215.9,330.2));
$pdf->setSourceFile('trip_ticket.pdf');
$tplIdx = $pdf->importPage(1, '/TrimBox');
$pdf->AddPage();
$pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
$pdf->SetMargins(5,5,5);
$pdf->SetFont('arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
//$pdf->SetAutoPageBreak(on, 20);


// SQL query command
/*$sqlr = "Select * FROM hr_employees where emp_id=$id"; /**** command for sql

// Run SQL
$sqlrun = mysqli_query($con, $sqlr); /***** query to sql

// Get result from array
$row = mysqli_fetch_assoc($sqlrun); /**** fetch the data


// Remove whitespaces
$fname= trim($row['first_name']);
$lname = trim($row['last_name']);
$mname = trim($row['middle_name']);

*/
$snum = $_POST['usn'];
$name = $_POST['name'];
$course = $_POST['course'];
//STUDENT NUMBER
$pdf->SetXY(0, 42.5);
$pdf->Cell('95');
$pdf->Cell(12,8,$snum,0,1,'L');

//NAME
$pdf->SetXY(0, 50);
$pdf->Cell('95');
$pdf->Cell(12,8,$name,0,1,'L');

//COURSE
$pdf->SetXY(0, 57);
$pdf->Cell('95');
$pdf->Cell(12,8,$course,0,1,'L');

$pdf->Output();

//} else {
//	echo "You have error";


//}



?>
