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

<h2>Edit Sales Record </h2>
<form action = "editsalesrecordprocess.php" method = "GET" >
	<label>Please input sales record ID to be edited:<br></label>
	<br>
    <input type="text" id="titles" name="title" placeholder="ID****" maxlength="30" required="required"><br/></p>
	<br>
	<p><button type="submit">Submit</button>
</form>
<?php
	echo"<a href=index.php><div id='text'><br>Return to Home Page</div></a>"
?>
</body>
</html>