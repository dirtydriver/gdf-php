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
create_selecttag("agazat");
?>
</td>
</tr>
<tr>
<td>Neme:</td>
<td>
<?php
include 'dbcon.php';
create_selecttag("neme");
?>
</td>
</tr>
<tr><td><input type="submit" form="peopleform" ></td></tr>
</table>

 <?php
 include 'dbcon.php';
 create_resulttable();
?>
<body>
</html>