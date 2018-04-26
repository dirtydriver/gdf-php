<?php
$servername = "mysql";
$username = "root";
$password = "password1234.";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$table_query="CREATE TABLE "

?> 