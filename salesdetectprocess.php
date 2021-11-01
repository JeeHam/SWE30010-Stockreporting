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
<hr>

<?php

	$filename = "../../data/salesrecords/sales.txt"; // locate the file
	$threshold = $_GET["threshold"];
	$handle = fopen($filename, "r"); // open the file in read mode
	$list = array();
	
	if ($handle){
        while (!feof($handle)){  // loop while not end of file
			$data = fgets($handle);  //read a line from the text file
			$split = (explode("\t",$data)); // split the text from file
			if ($data != ""){
				if ($split[2] >= $threshold){ //$split[2] is the value in description
				
					$list[$data] = $split; // add new element into associative array
				}
			}
        }
		fclose($handle);
		
		asort($list);
		
		foreach ($list as $x => $x_value){
            $x_true = (explode("\t",$x));
			
				echo "<div class=\"box\"><p><strong>ID: </strong>", $x_true[0], "</br>";
				echo "<strong>Title: </strong>", $x_true[1], "</br>";
				echo "<strong>Description: </strong>", $x_true[2], "</br>";
				echo "<strong>Date: </strong>", $x_true[3], "</br>";
                
        }
	}
?>
</body>
</html>