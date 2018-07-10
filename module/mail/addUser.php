<?php

require_once 'mailSettings.php';
require_once '../config.php';

$mail->addAddress($user);     // Add a recipient

$mail->Subject = 'New User for ' . $company_name;

$message = "

<H2>You have been added to use " . $company_name . " " . $module1 . "</H2>

<BR> 

<p>Please click this link to accept and reset your password:</p>
<a href='" . $url . "user/resetPass.php?email=$user&confirm=$verifyString'>ACCEPT</a>


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
