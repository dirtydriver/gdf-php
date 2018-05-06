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
<tr><td>Ágazat:</td><td><input type="text" name="agazat" value="" form="peopleform"></td></tr>
<tr>
<td>Neme:</td>
<td><input type="radio" name="neme" form="peopleform" value="Nő">Nő</td>
<td><input type="radio" name="neme" form="peopleform" value="Férfi">Férfi</td>
<td><input type="radio" name="neme" form="peopleform" value="Még nem döntötte el">Még nem döntötte el</td>
</tr>
<tr><td><input type="submit" form="peopleform" ></td></tr>
</table>

 <?php
 include 'dbcon.php';
 echo"<table border="1">";
 echo '<tr>
 <td>Név</td>
 <td>E-mail</td>
 <td>Fizetés</td>
 <td>Ágazat</td>
 <td>Neme</td>
</tr>';
            $results = mysqli_query($conn,"SELECT * FROM intalk2 LIMIT 10");
            while($row = mysql_fetch_array($results)) {
                echo '<tr>
                <td>'.$$row['neve'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['fizetes'].'</td>
                <td>'.$row['agazat']. '</td>
                <td>'.$row['neme'].'</td>
            </tr>';}
        echo"</table>";
?>
<body>
</html>