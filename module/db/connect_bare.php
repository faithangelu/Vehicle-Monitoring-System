<?php

// Create connection
// IP, user, pass, database
// $con= mysqli_connect("127.0.0.1","llmgco5_aibl", "abcd1234", "llmgco5_aibl");
// $string = '"' . $db_ip . '","' . $db_user . '","' . $db_pass . '","' . $db_table . '"';
$con= mysqli_connect($dp_ip, $db_user, $db_pass, $db_table);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL; " . mysqli_connect_error();
  }

?>
