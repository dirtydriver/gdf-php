<?php
include 'dbcon.php';


$agazatfilter=$_REQUEST['agazatquery'];


    function create_resulttable($connection,$agazat){
        
        
            
                
            $sql='SELECT neve , email , fizetes , a.agazat , n.neme FROM intalk2.dolgozo d , intalk2.agazat a , intalk2.neme n
            Where d.agazat = a.idagazat AND d.neme = n.idneme AND a.agazat='.$agazat.' ;';
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

create_resulttable($conn,$agazatfilter);
    header('Location: index.php');
    exit;

    
        
?>