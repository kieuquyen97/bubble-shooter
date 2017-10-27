
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Object Oriented</title>
    </head>
    
    <body>
        <?php
            class Counter
			{
				var $count= 0;
				var $startPoint= 0;
				function increment( ) 
				{
					$this->count++;
				}
			}
			$aCounter = new Counter;
			$aCounter->increment( );
			echo $aCounter->count; // prints 1
			$aCounter->count= 101;
		?>	
        <br/>
		<?php
			echo $aCounter->count; //prints 101
        ?>
    </body>
</html>