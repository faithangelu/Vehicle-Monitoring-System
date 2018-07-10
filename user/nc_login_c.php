<?php
session_start();
require_once '../module/date/dateSettings.php';
require_once '../module/db/connect.php';

$username = trim($_POST["usrname"]);
$password = trim($_POST['pasword']);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

//$stmt = $con->prepare("SELECT userId, email, pass, pass_hash FROM db_user WHERE email=? and pass=?");
$stmt = $con->prepare("SELECT db_user.userId, db_user.email, db_user.pass, db_user.pass_hash, db_hr_employees.active FROM db_user JOIN db_hr_employees ON db_user.emp_id = db_hr_employees.emp_id WHERE db_user.email=? and db_user.pass=? ");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();
$numRows = $stmt->num_rows;
$stmt->bind_result($userId, $email, $pass, $phash, $status);
$stmt->fetch();
$stmt->close();

 if ($numRows === 1) {
     if($status=='1') {
         $_SESSION['userId'] = $userId;
         $_SESSION['email'] = $email;
         header( 'Location: ../home' );     
         
         //echo $pass;
     } else {
    $_SESSION = array();
    session_destroy();
    header( 'Location: ../login?error=<label for="error" class="control-label">User now inactive!</label>' );
    }
}
 
else {
    $_SESSION = array();
    session_destroy();
    header( 'Location: ../login?error=<label for="error" class="control-label">Credentials not match!</label>' );
}



mysqli_close($con);
 ?>
