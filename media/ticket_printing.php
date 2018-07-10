<?php
require '../module/db/connect.php'; 

$id = $_GET['id'];

require_once('../php_packages/fpdf181/fpdf.php');
require_once('../php_packages/FPDI-1.6.1/fpdi.php');

$pdf = new FPDI('L','mm',array(279.4,215.9));
$pdf->setSourceFile('trip1.pdf');
$tplIdx = $pdf->importPage(1, '/TrimBox');
$pdf->AddPage();
$pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
$pdf->SetMargins(5,5,5);
$pdf->SetFont('arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
//$pdf->SetAutoPageBreak(on, 20);

 

// SQL query command
$sql = "SELECT * FROM db_trip_ticket where ticket_id='$id'"; // command for sql

// Run SQL
$result = mysqli_query($con, $sql); // query to sql

// Get result from array
$row = mysqli_fetch_array($result); //fetch the data


// Remove whitespaces
$ticket=trim($row['ticket_id']);
$date = trim($row['trip_date']);
$vehicle = trim($row['vehicle_id']);
$client = trim($row['customer']);
$account = trim($row['account']);
$driver = trim($row['driver']);
$helper1 = trim($row['helper1']);
$helper2 = trim($row['helper2']);
$ticket = $row['ticket_id'];
$time = trim($row['start_time']);
$warehouse = trim($row['time_warehouse']);
$loaded = trim($row['time_loaded']);
$cust = trim($row['time_to_cust']);
$unload = trim($row['time_unloaded']);
$garage = trim($row['time_to_garage']);
$end = trim($row['end_time']);

//DRIVER
//Ticket NUMBER
$pdf->SetXY(0, 18);
$pdf->Cell('95');
$pdf->Cell(12,8,$ticket,0,1,'L');

//Date
$pdf->SetXY(0, 23);
$pdf->Cell('90');
$pdf->Cell(12,8,$date,0,1,'C');

//Plata Number
$pdf->SetXY(0, 28);
$pdf->Cell('90');
$pdf->Cell(12,8,$vehicle,0,1,'C');

//Account
$pdf->SetXY(0, 34);
$pdf->Cell('90');
$pdf->Cell(12,8,$account,0,1,'C');

//Client
$pdf->SetXY(0, 39);
$pdf->Cell('90');
$pdf->Cell(12,8,$client,0,1,'C');

//Driver Name
$pdf->SetXY(0, 44);
$pdf->Cell('90');
$pdf->Cell(12,8,$driver,0,1,'C');

$help1 = "SELECT * from db_hr_employees WHERE first_name = '$helper2'";
$res = mysqli_query($con, $help1); // query to sql
$helper11 = mysqli_fetch_assoc($res); //fetch the data
$h = $helper11['first_name']. " ". $helper11['last_name'];

//Helper 1
$pdf->SetXY(0, 49);
$pdf->Cell('90');
$pdf->Cell(12,8,$helper1,0,1,'C');

//Helper 2
$pdf->SetXY(0, 54);
$pdf->Cell('90');
$pdf->Cell(12,8,$h,0,1,'C');

//Helper 2
$pdf->SetXY(0, 82);
$pdf->Cell('113');
$pdf->Cell(12,8,$time,0,1,'C');

//Warehouse
$pdf->SetXY(0, 87);
$pdf->Cell('110');
$pdf->Cell(12,8,$warehouse,0,1,'C');

//Customer
$pdf->SetXY(0, 97);
$pdf->Cell('110');
$pdf->Cell(12,8,$cust,0,1,'C');

//Garage
$pdf->SetXY(0, 107);
$pdf->Cell('110');
$pdf->Cell(12,8,$garage,0,1,'C');

//DRIVER
//Ticket NUMBER
$pdf->SetXY(0, 18);
$pdf->Cell('220');
$pdf->Cell(12,8,$ticket,0,1,'L');

//Date
$pdf->SetXY(0, 23);
$pdf->Cell('215');
$pdf->Cell(12,8,$date,0,1,'C');

//Plata Number
$pdf->SetXY(0, 28);
$pdf->Cell('215');
$pdf->Cell(12,8,$vehicle,0,1,'C');

//Account
$pdf->SetXY(0, 34);
$pdf->Cell('215');
$pdf->Cell(12,8,$account,0,1,'C');

//Client
$pdf->SetXY(0, 39);
$pdf->Cell('215');
$pdf->Cell(12,8,$client,0,1,'C');

//Driver Name
$pdf->SetXY(0, 44);
$pdf->Cell('215');
$pdf->Cell(12,8,$driver,0,1,'C');

$help1 = "SELECT * from db_hr_employees WHERE first_name = '$helper2'";
$res = mysqli_query($con, $help1); // query to sql
$helper11 = mysqli_fetch_assoc($res); //fetch the data
$h = $helper11['first_name']. " ". $helper11['last_name'];
//Helper 1
$pdf->SetXY(0, 49);
$pdf->Cell('215');
$pdf->Cell(12,8,$helper1,0,1,'C');

//Helper 2
$pdf->SetXY(0, 54);
$pdf->Cell('215');
$pdf->Cell(12,8,$h,0,1,'C');

//Start
$pdf->SetXY(0, 82);
$pdf->Cell('238');
$pdf->Cell(12,8,$time,0,1,'C');

//Warehouse
$pdf->SetXY(0, 87);
$pdf->Cell('235');
$pdf->Cell(12,8,$warehouse,0,1,'C');

//Customer
$pdf->SetXY(0, 97);
$pdf->Cell('235');
$pdf->Cell(12,8,$cust,0,1,'C');

//Garage
$pdf->SetXY(0, 107);
$pdf->Cell('235');
$pdf->Cell(12,8,$garage,0,1,'C');


//Garage
//$pdf->Image('media/dalisay.png',0,0);

$pdf->Output();
?>
