<?php
require '../module/db/connect.php';


$user = $_GET['email'];
$confirmHash = $_GET['confirm'];


// Username check if it is verified already
$sql = "SELECT * FROM db_user WHERE email = '$user' and user_hash = '$confirmHash'";
$sql_res = mysqli_query($con, $sql);

// Enter code - Skip verification if already verified

if (mysqli_num_rows($sql_res) > 0)
	{
	    $sql = "UPDATE db_user SET verified = 1 WHERE email = '$user'";
        $sql_res = mysqli_query($con, $sql);
        mysqli_close($con);

			echo '<div class="statusmsg"><H2>This Email is Confirmed.</H2></div>';
			echo 'You can now <a href="../login.php">LOGIN</a>';



	}

// Add User to Database
else
	{
			echo '<H2> Wrong Credentials.  <H2>';
	}
?>
