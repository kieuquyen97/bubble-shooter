<html>
<head>
	<title>PHP 02</title>
</head>

<body>
	<form action="xuly.php" Method="GET" > 
		Keyword: <input type="text" name="txtTukhoa"/>
		<input type="submit" value="Search"/>
	</form>

	<?php
		$sTukhoa = $_REQUEST["txtTukhoa"];
		if (isset($sTukhoa))
		{
			print " Keyword is: $sTukhoa";
			echo "<br> Result :";
		}
	?>
</body>
</html>