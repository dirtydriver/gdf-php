<?php
include 'dbcon.php';

$neve=$_REQUEST['neve'];
$email=$_REQUEST['email'];
$fizetes=$_REQUEST['fizetes'];
$agazat=$_REQUEST['agazat'];
$neme=$_REQUEST['neme'];

echo("Neve: ".$neve);
echo("Email: ".$email);
echo("Fizetése: ".$fizetes);
echo("Ágazata: ".$agazat);
echo("Neme: ".$neme);

$insert_query="INSERT INTO `intalk2`.`dolgozo` (`neve`, `email`, `fizetes`, `agazat`, `neme`) VALUES ('$neve', '$email', '$fizetes', '$agazat', '$neme');";
mysql_query($insert_query,$conn);
?>