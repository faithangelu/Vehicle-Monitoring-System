<?php
require_once '../module/db/connect.php';

$user = mysqli_real_escape_string($con, $_POST['usrname']);

$string_length=10;
$characters ="bcdfghjklmnpqrstvwxyzCDFGHJKLMNPQRSTVWXYZ23456789";
$verifystring = '';
$max = strlen($characters) - 1;
for ($i = 0; $i < $string_length; $i++) {
    $verifyString .= $characters[mt_rand(0, $max)];
  }

$stmt = $con->prepare("SELECT userId FROM user WHERE email = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($id);
$stmt->fetch();
$stmt->close();

if ($id === '') {
			echo "The email is not registered.";
		}
else {
  // Add to resetPass Table
  $stmt3 = $con->prepare("INSERT INTO reset_pass (userId, resethash) VALUES (?, ?)");
  $stmt3->bind_param("is", $id, $verifyString);
  $stmt3->execute();
  $stmt3->close();

  // Send Confirmation Email
  require_once '../module/mail/forgotMail.php';
  echo "Kindly Check your Email Inbox.";
}

mysqli_close($con);


 ?>
