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
		echo"<a href=displayalert.php><div id='clr'><h4>Display sales alert</h4></div></a>";
 		echo"<a href=about.php><div id='text'><h4>About this assignment</h4></div></a><br>";
	?>
	<?php
		$filename = "../../data/salesrecords/sales.txt"; // locate the file
		$handle = fopen($filename, "r"); // open the file in read mode
		$list = array();
		$limit = 100; //set threshold limit
		$message1 = "High sales detected";
		$message2 = "Low sales detected";
		$threshold = $_GET["threshold"];
		
		
		if($threshold >= $limit){ //display high sales 
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
		if($threshold < $limit){ //display low sales 
			echo "<script type='text/javascript'>alert('$message2');</script>";
		}

		
			
		

		
		
			
 
?>

</body>
</html>