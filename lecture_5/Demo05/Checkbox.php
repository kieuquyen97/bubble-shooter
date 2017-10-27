
<html>
<head>
	<title>Checkbox</title>
</head>

<body>
	<form method ="GET" action = "Checkbox.php">
		<input type="checkbox" name="chk1" value="en">English
		<br> 
		<input type="checkbox" name="chk2" value ="vn">Vietnam
		<br>
		<input type="submit" value="submit"><br>
	</form>
	<?php 
		echo "checkbox1: " . $_REQUEST['chk1']; 
		echo("<br>");
		echo "checkbox2: " . $_REQUEST['chk2'];
	?>

</body>
</html>