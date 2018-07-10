<?php
session_start();
require_once '../module/date/dateSettings.php';
require_once '../module/db/connect.php';

$username = trim($_POST["usrname"]);
$password = trim($_POST['pasword']);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$stmt = $con->prepare("SELECT userId, pass_hash, locked, attempts, verified  FROM user
  WHERE email=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$numRows = $stmt->num_rows;
$stmt->bind_result($userId, $phash, $locked, $attempts, $verified);
$stmt->fetch();
$stmt->close();

if ($numRows === 1) {
  if ($locked == 1) {
      Echo "Account Locked - Contact System Administrator to Unlock";
  }

  elseif ($verified ===  0) {
      Echo "Kindly Verify Your Email";
  }


  else {

    if (password_verify($password, $phash)) {
        $stmt1 = $con->prepare("UPDATE user SET attempts =?, last_login =? WHERE userId=?");
        $stmt1->bind_param("isi", $attempts=0, date('Y-m-d H:i:s'), $userId);
        $stmt1->execute();
        $stmt1->close();

        $_SESSION['userId'] = $userId;
        header( 'Location: ../home.php' );
        }

    else {
        $_SESSION = array();
        session_destroy();
        $attempts = $attempts + 1;
    

        if ($attempts < 5) {
            $stmt2 = $con->prepare("UPDATE user SET attempts = ? WHERE userId = ?");
            $stmt2->bind_param("ii", $attempts, $userId);
            $stmt2->execute();
            $stmt2->close();
            echo "Palpak Password Mo - Fail number " . $attempts;
            }
        else {
            $stmt3 = $con->prepare("UPDATE user SET locked = ? WHERE userId = ?");
            $stmt3->bind_param("ii", $locked=1, $userId);
            $stmt3->execute();
            $stmt3->close();
            echo "Account Locked - Contact System Administrator to Unlock<br>";
            }
       }

  }
}

else {
    $_SESSION = array();
    session_destroy();
    echo "Invalid Email Address";
}


mysqli_close($con);
 ?>
