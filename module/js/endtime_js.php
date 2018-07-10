<?php 
// Database Details - Security Risk - Modify
$db_ip = "127.0.0.1";
$db_user = "llmgco5_nclc_ops";
$db_pass = "abcd1234";
$db_table = "llmgco5_nclc_ops";


$con= mysqli_connect($dp_ip, $db_user, $db_pass, $db_table);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL; " . mysqli_connect_error();
  }


//echo  $row['account'];
$date = $_POST['date'];
$id = $_POST['id'];
$finished = $_POST['finished'];

$sql = "UPDATE db_trip_ticket SET end_time='$date', finished = '$finished' WHERE ticket_id='$id'";

if (mysqli_query($con, $sql)) {
    echo $date;
    echo '<script>window.location.href = "https://ops.northward.ph/home?FinishedTrip";</script>';
} else {
    echo "Error updating record: " . mysqli_error($con);
}

mysqli_close($con);
?>