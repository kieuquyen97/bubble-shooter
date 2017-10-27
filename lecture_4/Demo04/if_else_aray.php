<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Array</title>
  </head>
  
  <body>
      <?php
      
          $array = array(); //gọi hàm tạo mảng 
		  $i= -1;
		  if($i % 2 ==0) // i là số chẵn
       	  {	
	    	  for($j = 0; $j < count($array); $j++)
			  {
				  $array[$j] = $i;
			  }
		  }
		  else
		  {
			  $array[0] = 7; $array[1] = 9;
			  foreach($array as $i)
			  {
				  	echo($i . '<br/>');
			  }
			  print_r($array);
		  }
      ?>
  </body>
</html>
