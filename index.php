<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form  method="post" id="peopleform" action="worker_process.php"></form>
<table>
<tr><td>Neve:</td><td><input type="text" name="neve" value="" form="peopleform"></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email" value="" form="peopleform"></td></tr>
<tr><td>Fizetés:</td><td><input type="text" name="fizetes" value="" form="peopleform"></td></tr>
<tr><td>Ágazat:</td>
<td>
<?php
include 'dbcon.php';
create_selecttag("agazat",$conn);
?>
</td>
</tr>
<tr>
<td>Neme:</td>
<td>
<?php
create_selecttag("neme",$conn);
?>
</td>
</tr>
<tr><td><input type="submit" form="peopleform" ></td></tr>
</table>
<h3>Ágazat Szűrő</h3>
<?php
$sql='SELECT * FROM intalk2.agazat';
$results = mysqli_query($conn,$sql);
echo '<select name="agazatquery">';
while($row = mysqli_fetch_array($results)) {
    echo '<option value="'.$row['idagazat'].'">'.$row['agazat'].'</option>';}
    echo'</select>';

?>

<input type="submit" name="filterbtn" value="Szürés">

<?php
  echo"<table border=\"1\">";
  echo '<tr>
  <td>Név</td>
  <td>E-mail</td>
  <td>Fizetés</td>
  <td>Ágazat</td>
  <td>Neme</td>
 </tr>';


?>
<?php



function create_resulttable($agazat){
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "intalk2";
    // Create connection
   
    
    $conn = mysqli_connect($servername, $username, $password,$dbname);
        
            
        $sql='SELECT neve , email , fizetes , a.agazat , n.neme FROM intalk2.dolgozo d , intalk2.agazat a , intalk2.neme n
        Where d.agazat = a.idagazat AND d.neme = n.idneme AND a.agazat='.$agazat.' ;';
        $results = mysqli_query($conn,$sql);
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

if(isset($_POST['filterbtn']))
{
    echo "Kiskutya";
    $agazatfilter=$_REQUEST['agazatquery'];
    create_resulttable($agazatfilter);
} 
    
    
?>

<body>
</html>