<?php
$agazatfilter=$_REQUEST['agazatquery'];


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

create_resulttable($agazatfilter);
header('Refresh: 5; Location: index.php');
exit;
?>