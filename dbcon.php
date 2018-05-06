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

$dbcreate_query="CREATE DATABASE IF NOT EXISTS `intalk2` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci";
$tablecreate_query="CREATE TABLE IF NOT EXISTS `intalk2`.`dolgozo` (
    `dolgozo_id` INT NOT NULL AUTO_INCREMENT,
    `neve` VARCHAR(45) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `fizetes` VARCHAR(45) NOT NULL,
    `agazat` VARCHAR(45) NOT NULL,
    `neme` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`dolgozo_id`),
    UNIQUE INDEX `dolgozo_id_UNIQUE` (`dolgozo_id` ASC));";



function run_query($query,$connection){

    if ($connection->query($query) === TRUE) {
    } else {
        echo "Error table : " . $connection->error;
    }

}
function run_select($connection){
    
    echo"<table border=\"1\">";
    echo '<tr>
    <td>Név</td>
    <td>E-mail</td>
    <td>Fizetés</td>
    <td>Ágazat</td>
    <td>Neme</td>
   </tr>';
   
               $sql='SELECT * FROM intalk2.dolgozo';
               $results = mysqli_query($connection,$sql);
               while($row = mysqli_fetch_array($results)) {
                   echo '<tr>
                   <td>'.$row['neve'].'</td>
                   <td>'.$row['email'].'</td>
                   <td>'.$row['fizetes'].'</td>
                   <td>'.$row['agazat']. '</td>
                   <td>'.$row['neme'].'</td>
               </tr>';}
           echo"</table>";
    
    }

run_query($dbcreate_query,$conn);
run_query($tablecreate_query,$conn);



?> 