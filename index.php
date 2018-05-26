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
<form  method="post" id="queryform" action="filter.php"></form>
<h3>Ágazat Szűrő</h3>
<?php
$sql='SELECT * FROM intalk2.agazat';
$results = mysqli_query($conn,$sql);
echo '<select name="agazatquery">';
while($row = mysqli_fetch_array($results)) {
    echo '<option value="'.$row['idagazat'].'">'.$row['agazat'].'</option>';}
    echo'</select>';

?>


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
<input type="submit" form="queryform" >

<body>
</html>