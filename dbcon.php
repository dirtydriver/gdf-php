<?php
$servername = "172.20.0.2";
$username = "root";
$password = "password1234.";
$dbname = "intalk2";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

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



function create_structure($conn){
    $dbcreate_query="CREATE DATABASE IF NOT EXISTS `intalk2` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci";
    $tablecreate_dolgozo="CREATE TABLE IF NOT EXISTS `dolgozo` (
    `dolgozo_id` int(11) NOT NULL AUTO_INCREMENT,
    `neve` varchar(45) NOT NULL,
    `email` varchar(45) NOT NULL,
    `fizetes` varchar(45) NOT NULL,
    `agazat` int(11) NOT NULL,
    `neme` int(11) NOT NULL,
    PRIMARY KEY (`dolgozo_id`),
    UNIQUE KEY `dolgozo_id_UNIQUE` (`dolgozo_id`),
    KEY `agazat_FK_idx` (`agazat`),
    KEY `neme_FK_idx` (`neme`),
    CONSTRAINT `agazat_FK` FOREIGN KEY (`agazat`) REFERENCES `agazat` (`idagazat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `neme_FK` FOREIGN KEY (`neme`) REFERENCES `neme` (`idneme`) ON DELETE NO ACTION ON UPDATE NO ACTION
    );";
    $tablecreate_agazat="CREATE TABLE `agazat` (
        `idagazat` int(11) NOT NULL AUTO_INCREMENT,
        `agazat` varchar(45) NOT NULL,
        PRIMARY KEY (`idagazat`);";
    
    $tablecreate_neme="CREATE TABLE `neme` (
        `idneme` int(11) NOT NULL AUTO_INCREMENT,
        `neme` varchar(45) DEFAULT NULL,
        PRIMARY KEY (`idneme`)
      ) ;";

    $insert_agazat="INSERT INTO `intalk2`.`agazat` (`agazat`) VALUES ('IT'),('Gazdaság'),('Könyvelés'),('Üzleti Elemző');";
    $insert_neme="INSERT INTO `intalk2`.`neme` (`neme`) VALUES ('Nő'),('Férfi');";

    run_query($dbcreate_query,$conn);
    run_query($tablecreate_agazat,$conn);
    run_query($tablecreate_neme,$conn);
    run_query($tablecreate_dolgoz,$conn);
    run_query($insert_agazat,$conn);
    run_query($insert_neme,$conn);
    }

create_structure($conn);


?> 