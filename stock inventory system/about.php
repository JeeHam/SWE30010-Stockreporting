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

 echo "<h2>About The Assignment</h2>";

 echo "<ul><li>Current PHP version:"  , phpversion() , "</li>
		<li>Special features: none</ul></li>"; 

?>

<p><br>This is a group project of SWE30010 Managing IT Reports.
<br>Each team member has spent their time to work on this web application together.
<br>This project is strictly owned by the team.
<br>All rights reserved by the team</p>
		
 <h2><br>Team Members</h2>		
 
 <p>Name: Ngui Ting Fung<br>
 Student ID: 101215342<br>
 Email: <a href=https://outlook.office.com>101215342@students.swinburne.edu.my</a><br><br></p>
 
 <p>Name: Yong Jee Nam<br>
 Student ID: 101208151<br>
 Email: <a href=https://outlook.office.com>101208151@students.swinburne.edu.my</a><br><br></p>
 
 <p>Name: Diana Lim Khai Hwai<br>
 Student ID: 101214129<br>
 Email: <a href=https://outlook.office.com>101214129@students.swinburne.edu.my</a><br><br></p>
 
 <p>Name: Lim Jung<br>
 Student ID: 101217050<br>
 Email: <a href=https://outlook.office.com>101217050@students.swinburne.edu.my</a><br><br></p>

<?php
	echo"<a href=index.php><div id='text'><br>Return to Home Page</div></a><br>"
?>
</body>
</html>