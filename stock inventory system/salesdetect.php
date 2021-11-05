<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Managing IT Project" />
<meta name="keywords" content="Web,programming" />
<link href=style.css rel=stylesheet type=text/css />
<title>Stock Inventory System</title>
</head>
<body>
<h1>Stock Inventory System</h1>
<br>
<?php

 echo"<a href=addsalesrecords.php><div id='clr'><h4>Add Sales Record</h4></div></a>";
 echo"<a href=searchsalesrecords.php><div id='clr'><h4>Display Sales Record</h4></div></a>";
 echo"<a href=salesdetect.php><div id='clr'><h4>Detect High or Low Sales</h4></div></a>";
 echo"<a href=editsalesrecord.php><div id='clr'><h4>Edit Sales Records</h4></div></a>";
 echo"<a href=displayalert.php><div id='clr'><h4>Display Sales Alert</h4></div></a>";
 echo"<a href=about.php><div id='text'><h4>About The Assignment</h4></div></a><br>";
?>
<h2>Detect High or Low Sales</h2>
<form action = "salesdetectprocess.php" method = "GET">
	<br>
	<label>Find sales that are HIGHER than threshold:<br></label>
    <p>Sales Threshold: <input type="number" id="highsales" name="highsales" placeholder="Numbers only" maxlength="15"><br/></p>
	<br>
	<label>Find sales that are LOWER than threshold:<br></label>
    <p>Sales Threshold: <input type="number" id="lowsales" name="lowsales" placeholder="Numbers only" maxlength="15"><br/></p>
	<input type="submit" value="Find">
</form>
<br>
<br>
<?php
	echo"<a href=index.php><div id='text'>Return to Home Page</div></a><br>"
?>
</body>
</html>