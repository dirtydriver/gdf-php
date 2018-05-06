<?php
include 'dbcon.php';

$neve=$_REQUEST['neve'];
$email=$_REQUEST['email'];
$fizetes=$_REQUEST['fizetes'];
$agazat=$_REQUEST['agazat'];
$neme=$_REQUEST['neme'];

echo $neme;

$insert_query="INSERT INTO `intalk2`.`dolgozo` (`neve`, `email`, `fizetes`, `agazat`, `neme`) VALUES ('$neve', '$email', '$fizetes', '$agazat', '$neme');";

run_query($insert_query,$conn);

header('Location: index.php');
exit;
?>