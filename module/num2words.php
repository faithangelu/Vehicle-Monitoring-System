<?php
$number = 1000500;
$number = number_format($number, 2, '.', ''); // Number format used so that ending zeros will not be truncated by php

// Split Number to whole number and decimal
echo $number . " - Original Number <BR>";
$decimal_position = strrpos($number, "."); // Find position of .
$numberValue = substr($number, 0, $decimal_position); // Get Whole Number value
echo $numberValue;
echo "<BR>";

$decimal_position = $decimal_position +1 ; // Get string after .
$decimalValue = substr($number, $decimal_position, 2); // Get decimal value
echo $decimalValue;
echo "<BR>";

// Spell Out Whole Number
$spellout = new NumberFormatter("en_PH", NumberFormatter::SPELLOUT);
$wholeNumbertext = preg_replace('/[-]/', ' ', $spellout->format($numberValue));
$wholeNumbertext .= " pesos";
echo "<br>";
echo strtoupper($wholeNumbertext);
echo "<br>";

// Spell Out Decimal Number
$decimalNumbertext = preg_replace('/[-]/', ' ', $spellout->format($decimalValue));
echo "<br>";
echo strtoupper($decimalNumbertext);
echo "<br>";

// Logic to Combine Whole and Decimal Number text
if ($decimalNumbertext=="zero") {
  $text = $wholeNumbertext;
} else {
  $text = $wholeNumbertext;
  $text .= " and " . $decimalNumbertext . " centavos";
}

// Output Number Text
echo "<br>";
echo strtoupper($text);
echo "<br>";


// Currency Format
$pero_currency = numfmt_create( 'en_PH', NumberFormatter::CURRENCY );
$pesoValue = "** " . numfmt_format_currency($pero_currency, $number, "PHP") . " **";
echo $pesoValue . "<br>";


 ?>
