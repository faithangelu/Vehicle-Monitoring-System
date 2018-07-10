<?php

require_once 'mailSettings.php';
require_once '../config.php';

$mail->addAddress($user);     // Add a recipient

$mail->Subject = 'Password Reset for ' . $company_name;

$message = "

<H2>Password Reset!</H2>

<BR> 

<p>Please click this link to reset your password:</p>
<a href='" . $url . "user/resetPass.php?email=$user&confirm=$verifyString'>Reset Password</a>


";

$mail->Body    = $message;
$mail->AltBody = "Password Reset!

Kindly copy and paste the link:
<BR>"
. $url .  "user/resetPass.php?email=" . $user . "&confirm=" . $verifyString;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
