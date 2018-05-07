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
<?php
 create_resulttable($conn);
?>
<body>
</html>