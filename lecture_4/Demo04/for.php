
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Array</title>
</head>

<body>
	<?php
		for($i = 0; $i < 5; $i++)
		{
			$array[$i] = $i; // gán giá trị cho mảng	
		}
		for($i = 0; $i < count($array); $i++)
		{
			if ($i > 3)
				break;
				
			if ($array[$i] % 2 == 0)
				print($array[$i] . '<br>');	
			else
				continue;
		}
	?>
</body>
</html>
