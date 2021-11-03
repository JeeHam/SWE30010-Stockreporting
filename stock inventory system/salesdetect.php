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
<?php

 echo"<a href=addsalesrecords.php><div id='clr'><h4>Add a sales records</h4></div></a>";
 echo"<a href=searchsalesrecords.php><div id='clr'><h4>Display a sales records</h4></div></a>";
 echo"<a href=salesdetect.php><div id='clr'><h4>Detect sales</h4></div></a>";
 echo"<a href=editsalesrecord.php><div id='clr'><h4>Edit sales records</h4></div></a>";
 echo"<a href=about.php><div id='text'><h4>About this assignment</h4></div></a><br>";
?>

<form action = "salesdetectprocess.php" method = "GET">
	<label>Find sales that are HIGHER than threshold:<br></label>
    <p>Sales Threshold: <input type="number" id="highsales" name="highsales" placeholder="Numbers only" maxlength="15"><br/></p>
	<label>Find sales that are LOWER than threshold:<br></label>
    <p>Sales Threshold: <input type="number" id="lowsales" name="lowsales" placeholder="Numbers only" maxlength="15"><br/></p>
	<input type="submit" value="Find">
</form>
<a href="index.php">Return to home page</a>
</body>
</html>