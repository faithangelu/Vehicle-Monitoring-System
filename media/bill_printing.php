<?php
require '../module/db/connect.php'; 

$email = $_GET['email'];
$id = $_GET['id'];
$today = date("F j, Y");

require_once('../php_packages/fpdf181/fpdf.php');
require_once('../php_packages/FPDI-1.6.1/fpdi.php');

$pdf = new FPDI('P','mm',array(219,287));
$pdf->setSourceFile('pdf.pdf');
$tplIdx = $pdf->importPage(1, '/TrimBox');
$pdf->AddPage();
$pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
$pdf->SetMargins(5,5,5);
$pdf->SetFont('arial', 'B', 11);
$pdf->SetTextColor(0, 0, 0);
//$pdf->SetAutoPageBreak(on, 20);

 

// SQL query command
$trip = "SELECT * FROM db_trip_ticket where ticket_id='$id'"; 
// Run SQL
$result = mysqli_query($con, $trip); // query to sql
// Get result from array
$row = mysqli_fetch_array($result); //fetch the data
//$cust = $row['customer'];

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
$particular = trim($row['comment']);
$veh = "SELECT * FROM db_vehicles_detail WHERE plate_no='$vehicle'"; 
$query = mysqli_query($con,$veh);
$get = mysqli_fetch_assoc($query);
$cat = $get['vehicle_category']; 

if ($cat =='0'){
    $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$account'"; 
    $squery = mysqli_query($con,$vehi);
    $gets = mysqli_fetch_assoc($squery);
    $cats = $gets['4wh'];
    //TO
    $pdf->SetXY(0, 78);
    $pdf->Cell('166');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT
    $pdf->SetXY(0, 97);
    $pdf->Cell('167');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT total
    $pdf->SetXY(0, 201);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
} else if ($cat =='1'){
    $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$account'"; 
    $squery = mysqli_query($con,$vehi);
    $gets = mysqli_fetch_assoc($squery);
    $cats = $gets['6wh'];
    //TO
    $pdf->SetXY(0, 78);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT
    $pdf->SetXY(0, 97);
    $pdf->Cell('167');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT total
    $pdf->SetXY(0, 201);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
} else if ($cat =='2'){
    $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$account'"; 
    $squery = mysqli_query($con,$vehi);
    $gets = mysqli_fetch_assoc($squery);
    $cats = $gets['10wh'];
    //TO
    $pdf->SetXY(0, 78);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT
    $pdf->SetXY(0, 97);
    $pdf->Cell('167');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT total
    $pdf->SetXY(0, 201);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
} else if ($cat =='3'){
    $vehi = "SELECT * FROM db_trip_rate WHERE delivery='$account'"; 
    $squery = mysqli_query($con,$vehi);
    $gets = mysqli_fetch_assoc($squery);
    $cats = $gets['tractor'];
    //TO
    $pdf->SetXY(0, 78);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT
    $pdf->SetXY(0, 97);
    $pdf->Cell('167');
    $pdf->Cell(12,8,$cats,0,1,'L');
    //AMOUNT total
    $pdf->SetXY(0, 201);
    $pdf->Cell('165');
    $pdf->Cell(12,8,$cats,0,1,'L');
} 


//-----------------------------------------------------------
//CLIENT
$pdf->SetXY(0, 27);
$pdf->Cell('45');
$pdf->Cell(12,8,$client,0,1,'L');

// SQL query command
$a1 = "SELECT * FROM db_customer where business_name='$client'"; 
// Run SQL
$a2 = mysqli_query($con, $a1); // query to sql
// Get result from array
$a3 = mysqli_fetch_array($a2); //fetch the data
$a4 = $a3['address'];

//ADD1
$pdf->SetXY(0, 32);
$pdf->Cell('45');
$pdf->Cell(12,8,$a4,0,1,'L');

//ADD2
$pdf->SetXY(0, 37);
$pdf->Cell('55');
$pdf->Cell(12,8,"",0,1,'L');
//------------------------------------------------------------

//FROM
$pdf->SetXY(0, 48);
$pdf->Cell('160');
$pdf->Cell(12,8,$today,0,1,'L');

//TO
$pdf->SetXY(0, 53);
$pdf->Cell('160');
$pdf->Cell(12,8,"",0,1,'L');

//-------------------------------------------------------------

//ACCOUNT
$pdf->SetXY(0,78);
$pdf->Cell('75');
$pdf->Cell(60,8,$account,0,1,'C');

//date
$pdf->SetXY(0, 97);
$pdf->Cell('17');
$pdf->Cell(12,8,$date,0,1,'L');

//PARTICULARS
$pdf->SetXY(0, 97);
$pdf->Cell('87');
$pdf->Cell(12,8,$particular,0,1,'L');

//-------------------------------------------------------------

// SQL query command
$preparedby = "SELECT * FROM db_hr_employees where email='$email'"; 
// Run SQL
$preparedbyquery = mysqli_query($con, $preparedby); // query to sql
// Get result from array
$preparedbyqueryfetch = mysqli_fetch_array($preparedbyquery); //fetch the data
$prepare = strtoupper($preparedbyqueryfetch['first_name']. " " .$preparedbyqueryfetch['last_name']) ;

//-----------------------------------------------------------

//PREPARED
$pdf->SetXY(0, 222);
$pdf->Cell('6');
$pdf->Cell(12,8,$prepare,0,1,'L');

$pdf->Output();
?>
