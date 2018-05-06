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
 run_select();
?>
<body>
</html>