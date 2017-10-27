<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
	Biến toàn cục trong PHP <br/>
	<?php
		function doublevalue1($var1 = 5)
		{
			global $temp;
			$temp = $var1 * 2;
		}
		$temp = 5;
		doublevalue1();
		echo "\$temp is: $temp";	
	?>
    <br/>
    Tham trị vs tham biến <br/>
    <?php
		function doublevalue2(&$var2)
		{
			$var2 = $var2 * 2;
		}
		$variable = 5;
		doublevalue2($variable);
		echo "\$variable is: $variable";
	?>
</body>
</html>