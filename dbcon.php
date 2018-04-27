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

$dbcreate_query="CREATE DATABASE IF NOT EXISTS `intalk2`";
$tablecreate_query="CREATE TABLE IF NOT EXISTS `intalk2`.`dolgozo` (
    `dolgozo_id` INT NOT NULL AUTO_INCREMENT,
    `neve` VARCHAR(45) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `fizetes` VARCHAR(45) NOT NULL,
    `agazat` VARCHAR(45) NOT NULL,
    `neme` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`dolgozo_id`),
    UNIQUE INDEX `dolgozo_id_UNIQUE` (`dolgozo_id` ASC));";

if ($conn->query($dbcreate_query) === TRUE) {
    echo "Database  created successfully";
} else {
    echo "Error database : " . $conn->error;
}

if ($conn->query($tablecreate_query) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error table : " . $conn->error;
}

?> 