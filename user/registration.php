<?php
require_once '../module/db/connect.php';
require_once '../module/date/dateSettings.php';

$user = mysqli_real_escape_string($con, $_POST['usrname']);
$pass = mysqli_real_escape_string($con, $_POST['pasword']);
$uhash = password_hash($user, PASSWORD_DEFAULT);
$phash = password_hash($pass, PASSWORD_DEFAULT);

$date = date_create();
$now = date_format($date, 'Y-m-d H:i:s');

$string_length=12;
$characters ="bcdfghjklmnpqrstvwxyzCDFGHJKLMNPQRSTVWXYZ23456789";
$uhash = '';
$max = strlen($characters) - 1;
for ($i = 0; $i < $string_length; $i++) {
    $uhash .= $characters[mt_rand(0, $max)];
  }

// Username check if it already exist
$stmt = $con->prepare("SELECT userId FROM user WHERE email = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();
$numRows = $stmt->num_rows;
if($numRows > 0) {
			echo "The email " . $user . " is already used.";
		}

// New User
else
	{
				  // Add to User Table
					$stmt1 = $con->prepare("INSERT INTO user (email, pass_hash, user_hash, join_date) VALUES (?,?,?,?)");
					$stmt1->bind_param("ssss", $user, $phash, $uhash, $now);
					$stmt1->execute();
					$stmt1->close();



		// Send Confirmation Email
		require_once '../module/mail/registerMail.php';
	
	    //
	    Echo "Kindly confirm your email";
	}

$stmt->close();


mysqli_close($con);
?>
