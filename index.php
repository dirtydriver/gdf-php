<?php
require('worker_process.php')
?>

<html>
<head></head>
<body>
<form action="worker_process.php" method="post" id="peopleform"></form>
<table>
<tr><td>Neve:</td><td><input type="text" name="neve" value="" form="peopleform"></td></tr>
<tr><td>E-mail:</td><td><input type="text" name="email" value="" form="peopleform"></td></tr>
<tr><td>Fizetés:</td><td><input type="text" name="fizetes" value="" form="peopleform"></td></tr>
<tr><td>Ágazat:</td><td><input type="text" name="agazat" value="" form="peopleform"></td></tr>
<tr>
<td>Neme:</td>
<td><input type="radio" name="neme" form="peopleform" value="Nő">Female></td>
<td><input type="radio" name="neme" form="peopleform" value="Férfi">Male</td>
<td><input type="radio" name="neme" form="peopleform" value="Még nem döntötte el">Other</td>
</tr>
<tr><td><input type="submit" form="peopleform"></td></tr>
</table>
<body>
</html>