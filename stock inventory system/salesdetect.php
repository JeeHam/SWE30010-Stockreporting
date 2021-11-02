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