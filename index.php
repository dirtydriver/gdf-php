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
            mysql_select_db("intalk2");
            $results = mysql_query("SELECT * FROM intalk2 LIMIT 10");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['neve']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['fizetes']?></td>
                    <td><?php echo $row['agazat']?></td>
                    <td><?php echo $row['neme']?></td>
                </tr>

            <?php
            }
            ?>
<body>
</html>