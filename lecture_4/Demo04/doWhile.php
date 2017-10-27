
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PHP - Cau Truc Dieu Khien</title>
    </head>
    
    <body>
    <?php
    	$i = 5;
		while($i > 0)
		{
			echo($i--);
		}		
		
        print('<br>');
		
        do
		{
			echo(--$i);
		}
		while($i > 0);
	?>
    </body>
</html>