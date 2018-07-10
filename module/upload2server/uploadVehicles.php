<?php 
if(isset($_POST['submit'])) {
    $plate = $_POST['plate'];
    $engine = $_POST['engine'];
    $chassis = $_POST['chassis'];
    $deno = $_POST['deno'];
    $pis = $_POST['piston'];
    $cyl = $_POST['cyl'];
    $fuel = $_POST['fuel'];
    $make = $_POST['make'];
    $series = $_POST['series'];
    $bod = $_POST['body_type'];
    $year = $_POST['year'];
    $gross = $_POST['gross_wt'];
    $net = $_POST['net_wt'];
    $sup = $_POST['supplier'];
    $pd = $_POST['purch_date'];
    $cat = $_POST['veh_category'];
    $user = $_SESSION['userId'];

    
    
    $sql = "INSERT into vehicle_details (plate_no,engine_no,chassis_no,denomination,piston_disp,cylinders,fuel,make,series,body_type,year,gross_wt,net_wt,supplier,date_purch,file_or,file_cr,categ) 
            VALUES ('$plate', '$engine', '$chassis', '$deno', '$pis', '$cyl', '$fuel', '$make', '$series', '$bod', '$year', '$gross', '$net', '$sup', '$pd', '$or', '$cr', '$cat')";
        
        if (mysqli_query($con, $sql)) {
           //file Upload
            $target_dir = "uploads/";
            $target_file_or = $target_dir . basename($_FILES["file_or"]["name"]);
            $target_file_or = $target_dir . basename($_FILES["file_cr"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        } 
}


?>

