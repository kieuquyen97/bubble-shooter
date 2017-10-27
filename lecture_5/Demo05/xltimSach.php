
<html>
<head>
	<title>PHP 02</title>
</head>

<body>
	<?php
		$sTukhoa = $_REQUEST["txtTukhoa"];
	?>
	<h1>Tim sach</h1>
	<form action="xltimSach.php" method ="get">
		Keyword is: <?php echo $sTukhoa; ?> <br>
		Result: 
	</form>
</body>
</html>
