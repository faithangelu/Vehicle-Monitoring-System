<?php 

require_once '../../config.php';
require_once '../db/connect_bare.php';

// prepare and bind
$stmt = $con->prepare("INSERT INTO accounts (account_id, account_name, parent_account, description, account_type) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("isisi", $code, $name, $parent,  $desc, $type);

// set parameters and execute
$code = $_POST['acc_code'];
$name = $_POST['acc_name'];
$parent = $_POST['acc_parent'];
$desc = $_POST['acc_desc'];
$type = $_POST['acc_type'];

if($stmt->execute()){
	echo "New accounts saved";
} else {
	echo "Error:" . $stmt->getMessage();
}

$stmt->close();
?>