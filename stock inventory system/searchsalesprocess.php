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
	<?php
		$filename = "../../data/salesrecords/sales.txt"; // locate the file
		$title= $_GET["title"];
		$handle = fopen($filename, "r"); // open the file in read mode
		$list = array();
		

		
			if ($handle) {
                while (!feof($handle)) {  // loop while not end of file
                    $data = fgets($handle);  //read a line from the text file
                    // if job title is found
                    if ((strpos($data, $title)) !== FALSE) {
                        $split = (explode("\t",$data)); // split the text from file
                        $list[$data] = $split[3]; // add new element into associative array
                    }
                }
                fclose($handle); // close the text file
                
                    // Sort the associative array in asending order
                    asort($list);
                    // Loop through the $list array
                    foreach ($list as $x => $x_value) {
                        $x_true = (explode("\t",$x));
                        echo "<div class=\"box\"><p><strong>ID: </strong>", $x_true[0], "</br>";
                        echo "<strong>Title: </strong>", $x_true[1], "</br>";
                        echo "<strong>Description: </strong>", $x_true[2], "</br>";
                        echo "<strong>Date: </strong>", $x_value, "</br>";
                        
                    }
                
                
            }
			
 
	echo"<a href=searchsalesrecords.php><div id='clr'>Search for another sales record</div></a>";
	echo"<a href=index.php><div id='text'>Return to Home Page</div></a>"
?>

</body>
</html>