<?php

require_once 'mailSettings.php';

$mail->setFrom($mail_from_email, $mail_from_name);

$mail->addAddress($user);     // Add a recipient

$mail->Subject = 'Email verification from ' . $company_name;

$message = "

<H2>Thank you for signing up!</H2>
<p>Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.</p>

<p>Please click this link to activate your account:</p>
<a href=" . $url . "user/verify.php?email=" . $user . "&confirm=" . $uhash .">Confirm Email</a>

";

$mail->Body    = $message;
$mail->AltBody = 'Copy and paste the address on a browser: ' . $url . 'user/verify.php?email=$user&confirm=$uhash';


if(!$mail->send()) {
    echo 'Failed to send Verification Email';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

?>
