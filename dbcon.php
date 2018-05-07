<?php
$servername = "172.20.0.2";
$username = "root";
$password = "password1234.";
$dbname = "intalk2";
// Create connection
$conn_first=mysqli_connect($servername, $username, $password);
if (!$conn_first) {
    die("Connection failed: " . mysqli_connect_error());
    }
create_db($conn_first);

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
function create_resulttable($connection){

    
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


function create_db($conn){
    $dbcreate_query="CREATE DATABASE IF NOT EXISTS `intalk2` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci";
    run_query($dbcreate_query,$conn);
   
    }
function create_selecttag($tablename){

    if($tablename =="neme"){
        $sql='SELECT * FROM intalk2.'.$tablename.'';
        $results = mysqli_query($connection,$sql);
        echo '<select name="neme" form="peopleform">';
        while($row = mysqli_fetch_array($results)) {
            echo '<option value="'.$row['idneme'].'">'.$row['neme'].'</option>';}
            echo'</select>';

    } else {
        $sql='SELECT * FROM intalk2.'.$tablename.'';
        $results = mysqli_query($connection,$sql);
        echo '<select name="neme" form="peopleform">';
        while($row = mysqli_fetch_array($results)) {
            echo '<option value="'.$row['idagazat'].'">'.$row['agazat'].'</option>';}
            echo'</select>';

    }
    

}

function create_structure($conn){
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
    $tablecreate_agazat="CREATE TABLE IF NOT EXISTS `agazat` (
        `idagazat` int(11) NOT NULL AUTO_INCREMENT,
        `agazat` varchar(45) NOT NULL,
        PRIMARY KEY (`idagazat`));";
    
    $tablecreate_neme="CREATE TABLE IF NOT EXISTS `neme` (
        `idneme` int(11) NOT NULL AUTO_INCREMENT,
        `neme` varchar(45) DEFAULT NULL,
        PRIMARY KEY (`idneme`)) ;";

    $insert_agazat="INSERT IGNORE INTO `intalk2`.`agazat` (`agazat`) VALUES ('IT'),('Gazdaság'),('Könyvelés'),('Üzleti Elemző');";
    $insert_neme="INSERT IGNORE INTO `intalk2`.`neme` (`neme`) VALUES ('Nő'),('Férfi');";

    run_query($tablecreate_agazat,$conn);
    run_query($tablecreate_neme,$conn);
    run_query($tablecreate_dolgozo,$conn);
    run_query($insert_agazat,$conn);
    run_query($insert_neme,$conn);
    }

$val = mysqli_query($conn,'select * from dolgozo LIMIT 1');

if($val == FALSE){
    create_structure($conn);    

}

?> 