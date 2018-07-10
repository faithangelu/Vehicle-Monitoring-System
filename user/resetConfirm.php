<?php
session_start();
require_once '../module/date/dateSettings.php';
require_once '../module/db/connect.php';

$user = trim($_POST["usrname"]);
$confirm = trim($_POST['confirmString']);
$password = trim($_POST['pasword']);
$password = mysqli_real_escape_string($con, $password);

$stmt = $con->prepare("SELECT userId FROM user WHERE email = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($id);
$stmt->fetch();
$stmt->close();

$stmt = $con->prepare("SELECT resetId FROM reset_pass WHERE userId = ? AND resethash = ?");
$stmt->bind_param("is", $id, $confirm);
$stmt->execute();
$result = $stmt->get_result();
$numRows = $result->num_rows;
$row = $result->fetch_assoc();
$resetId = $row['resetId'];
$stmt->close();

if($numRows == 1) {
  $phash = password_hash($password, PASSWORD_DEFAULT);
  $stmt1 = $con->prepare("UPDATE user SET pass_hash=? WHERE userId =?");
  $stmt1->bind_param("si", $phash, $id);
  $stmt1->execute();
  $stmt1->close();

  $stmt2 = $con->prepare("DELETE FROM reset_pass WHERE resetId =?");
  $stmt2->bind_param("i", $resetId);
  $stmt2->execute();
  $stmt2->close();
  ECHO 'Password has been reset.';
  echo $id;
  echo $phash;
  }
else {
  Echo 'Error in Password Reset'; // Wrong Credentials
}
mysqli_close($con);
 ?>
