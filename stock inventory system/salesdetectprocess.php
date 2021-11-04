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
	$threshold = 0;
	$threshold1 = $_GET["highsales"];
	$threshold2 = $_GET["lowsales"];
	$handle = fopen($filename, "r"); // open the file in read mode
	$list = array();
	$error = 0;
	$highlow = 0;
	
	if (!empty($threshold1)&&!empty($threshold2)){// check if both have value
		echo "<p>Please enter the value on one threshold only.</p>";
		$error =1;
	}
		elseif (empty($threshold1)&&empty($threshold2)){// check if both are empty
			echo "<p>Please enter the value on one threshold only.</p>";
			$error =1;
		}
			elseif (empty($threshold2)){// check if lowsales is empty
				$threshold = $threshold1;
				$highlow = 1;
			}
				elseif (empty($threshold1)){// check if highsales is empty
					$threshold = $threshold2;
					$highlow = 2;
				}
					
		
	
	if ($handle){
		if ($error == 0 && $highlow == 1){
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
		}
		
		if ($error == 0 && $highlow == 2){
        while (!feof($handle)){  // loop while not end of file
			$data = fgets($handle);  //read a line from the text file
			$split = (explode("\t",$data)); // split the text from file
			if ($data != ""){
				if ($split[2] <= $threshold){ //$split[2] is the value in description
				
					$list[$data] = $split; // add new element into associative array
				}
			}
        }
		fclose($handle);
		}
		
		asort($list);
		foreach ($list as $x => $x_value){
            $x_true = (explode("\t",$x));
			
				echo "<div class=\"box\"><p><strong>ID: </strong>", $x_true[0], "</br>";
				echo "<strong>Title: </strong>", $x_true[1], "</br>";
				echo "<strong>Sales thresholds: </strong>", $x_true[2], "</br>";
				echo "<strong>Date: </strong>", $x_true[3], "</br>";
                
        }
	}
?>
<a href="salesdetect.php">Back</a><br>
<a href="index.php">Return to home page</a>
</body>
</html>