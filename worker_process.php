<?php
include 'dbcon.php';

$neve=$_GET['neve'];
$email=$_GET['email'];
$fizetes=$_GET['fizetes'];
$agazat=$_GET['agazat'];
$neme=$_GET['neme'];

$insert_query="INSERT INTO `intalk2`.`dolgozo` (`neve`, `email`, `fizetes`, `agazat`, `neme`) VALUES ('$neve', '$email', '$fizetes', '$agazat', '$neme');";

run_query($insert_query,$conn);

header("index.php")
?>