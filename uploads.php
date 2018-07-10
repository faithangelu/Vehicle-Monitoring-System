<?php
if(isset($_POST['upload'])){
 
 $make = $_POST['make'];
 $model = $_POST['model'];
 $type = $_POST['type'];
 $plate = $_POST['plate'];
 $eng = $_POST['engine'];
 $cha = $_POST['chassis'];
 $cat = $_POST['category'];
 $start = $_POST['start_date'];
 $end = $_POST['end_date'];
 $name = $_FILES['file']['name'];
 $target_dir = "upload/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
  $sql = "INSERT INTO `db_vehicles_detail`(`vehicle_id`, `make`, `year_model`, `body_type`, `plate_no`, `engine_no`, `chassis_no`, `vehicle_category`, `insurance_start_date`, `insurance_end_date`, `file_path` , `remarks`) 
  VALUES ('$make', '$model','$type', '$plate', '$eng', '$cha', '$cat', '$start','$end','$name', '$remarks')";
  
  if (mysqli_query($con, $sql)) {
      // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
     echo '<script>window.location.href = "https://ops.northward.ph/home?GeneratedTrip";</script>';                 
 
     } else {
              echo "Error: " . $sql . "<br>" . $con->error;
     }
  
 
 
    }
}
?>
                
                

