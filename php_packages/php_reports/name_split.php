<?php

$name = "The quick brown elephant fox jumped over.";
echo "The company name is: " . $name . "<br>";

$length = strlen($name);

if ($length <= 30) {
      $line1 = $name;
      echo "Line 1: " . $line1 . " - " . strlen($line1) . "<br>";
}

else {
$name_split = substr($name, 0, 30);
$last_space = strrpos($name_split, " ");
$line1= substr($name, 0, $last_space);
echo "Line 1: " . $line1 . " - " . strlen($line1) . "<br>";
$name_residual = substr($name, $last_space);

// LINE 2
if (strlen($name_residual)>30) {
  $name = $name_residual;
  $line2_orig = substr($name, 0, 30);
  $last_space = strrpos($line2_orig, " ");
  $line2 = substr($line2_orig, 0, $last_space);
  echo "Line 2: " . $line2 . " - " . strlen($line2) . "<br>";
  $name_residual = substr($name, $last_space);

  // LINE 3
  if (strlen($name_residual)>30) {
    $name = $name_residual;
    $line3_orig = substr($name, 0, 30);
    $last_space = strrpos($line3_orig, " ");
    $line3 = substr($line3_orig, 0, $last_space);
    echo "Line 3: " . $line3 . " - " . strlen($line3) . "<br>";
    $name_residual = substr($name, $last_space);

    // LINE 4
    if (strlen($name_residual)>30) {
      $name = $name_residual;
      $line4_orig = substr($name, 0, 30);
      $last_space = strrpos($line4_orig, " ");
      $line4 = substr($line4_orig, 0, $last_space);
      echo "Line 4: " . $line4 . " - " . strlen($line4) . "<br>";
      $name_residual = substr($name, $last_space);
      }

    else {
      $line4 = $name_residual;
      echo "Line 4: " . $line4 . " - " . strlen($line4) . "<br>";
    }}

  else {
    $line3 = $name_residual;
    echo "Line 3: " . $line3 . " - " . strlen($line3) . "<br>";
  }}

else {
  $line2 = $name_residual;
  echo "Line 2: " . $line2 . " - " . strlen($line2) . "<br>";
  }
}

?>
