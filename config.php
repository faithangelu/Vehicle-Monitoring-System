<?php

setlocale(LC_MONETARY, 'en_PH');

//
$user = $_SESSION['userId'];

// Variables
date_default_timezone_set('Asia/Manila');
$now = date("Y-m-d H:i:s");
$today = date("Y-m-d");

define('ROOT', __DIR__ .'/');

// Company Name
$company_name = "Northward Crest Logistics Corporation";
$company_short_name = "VMS";

// Base URL
$url = "https://ops.northward.ph/";

// Header Constants
$asst_bootstrap = $url . "assets/css/bootstrap.min.css";
$asst_bootstrap1 = $url . "assets/css/bootstrap-theme.min.css";
$asst_fontawe = "assets/fonts/font-awesome/css/font-awesome.css";
$asst_morris = "assets/css/plugins/morris/morris-0.4.3.min.css";
$asst_animate = "assets/css/animate.css";
$asst_css_style = "assets/css/style.css";
$fave_icon = "favicon.ico";

// Footer
$module1 = "Vehicle Monitoring System";
$ver = "1.0.0";

// IT Company
$comp115 = "NUCLIDE";

// Database Details - Security Risk - Modify
$db_ip = "127.0.0.1";
$db_user = "llmgco5_nclc_ops";
$db_pass = "abcd1234";
$db_table = "llmgco5_nclc_ops";

// Mail
$mail_host = "smtp.mailgun.org";
$mail_user = 'postmaster@mg.greenluzon.com';
$mail_pass ='boompanes';
$mail_from_email = 'noreply@yourdomain.com';
$mail_from_name = 'NO REPLY';
$mail_replyto_email = 'reply@yourdomain.com';
$mail_replyto_name =  'REPLY';

?>
