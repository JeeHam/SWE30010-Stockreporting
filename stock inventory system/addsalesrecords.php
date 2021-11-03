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

<form action = "addsalesprocess.php" method = "POST">
	<label>ID:<br></label>
    <input type="text" id="posid" name="id" required="required" placeholder="ID****" maxlength="7"><br/></p>
	<label>Title:<br></label>
    <input type="text" id="titles" name="title" placeholder="title" required="required" maxlength="30"><br/></p>
	<label>Description:<br></label>
	<textarea name="description" id="descriptions" rows="10" cols="60" placeholder="Enter comments here" required="required" maxlength="250"></textarea><br/></p>
   
	<label>Date:<br></label>
    <input type="text" id="dates" name="date" placeholder="<?=Date('d-m-Y')?>" required="required"><br/></p>
			
   

  <p><button type="submit">Submit</button>
</form>
<?php
echo"<a href=index.php><div id='text'>Return to Home Page</div></a>"
?>
</body>
</html>