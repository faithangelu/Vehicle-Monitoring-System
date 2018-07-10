<?php
require_once '../php_packages/PHPMailer/PHPMailerAutoload.php';
require_once '../config.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = $mail_host;
$mail->SMTPAuth = true;
$mail->Username = $mail_user;
$mail->Password = $mail_pass;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;


$mail->setFrom($mail_from_email, $mail_from_name);
$mail->addReplyTo($mail_replyto_email, $mail_replyto_name);

$mail->isHTML(true);
?>
