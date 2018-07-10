<?php
echo 'Fake ID <br>';
echo $_GET['id'];
echo '<br>';
$flakeid = $_GET['id'];
echo 'Divided by 23 <br>';
$trueid = $flakeid/23;
echo $trueid;
echo '<br>';
$trueid = $trueid -248691;
//$change = (($id * 357) + 248691)*23;
echo 'Subtracted 248691 <br>';
echo $trueid;
echo '<br>';
echo 'Divided by 357 <br>';
$trueid = $trueid / 357;
echo $trueid;
echo '<br>';
echo 'Boo';
echo '<br>';
$trueida = ((($flakeid/23)-248691)/357);
echo $trueida;
 ?>
