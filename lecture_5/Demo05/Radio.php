<html>
<head>
	<title>Radio</title>
</head>
	
<body>
	<form action="Radio.php" method="GET">
		<input type="radio" name="radGT" value="Nam">Nam <br>
		<input type="radio" name="radGT" value="Nu">Nu <br>
		<input type="submit" value = "Submit">
	</form>
	<?php
		if(isset($_GET['radGT']))
		{
			echo "Gioi Tinh : " . $_REQUEST['radGT'];
		}
	?>
</body>
</html>
