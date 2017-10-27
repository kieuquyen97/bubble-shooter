<html> 

	<?php
    $isDisplay = $_GET['display'];
    //echo($isDisplay . ':' . gettype($isDisplay));
    $isName = 'Cao Thanh';
    ?>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Variable</title>
    </head>

    <body>
    
        The name is: <?php echo($isName);?> <br>
        <hr>
    
       <?php 
			if ($isDisplay == '1')
			{
				 //Nghe em vào đại học
			}
			else
			{
				 //Quê hương
			}
		?>
        
        <?php
			if ($isDisplay == '1')
			{
				// Nghe em vào đại học
        ?>
        
                Miền Nam em ơi, còn nhớ <br />
                Kháng chiến năm nào gian khổ <br />
                Đồn giặc bủa vây thôn xóm điêu tàn <br />
                Trường: giặc đốt rồi, còn lại ánh trăng <br />
                Giữa hai trận càn, anh dạy em học chữ <br />
                Mẩu than em vẽ lên tường gạch đỏ <br />
                Những lá cờ sao bên những vòm tròn <br />
                Đầu nghiêng nghiêng theo nét chữ run run <br />
              

        <?php
			}
			else
			{
				// Quê hương
        ?>
                
                Quê hương là chùm khế ngọt <br />
                Cho con trèo hái mỗi ngày <br />
                Quê hương là đường đi học <br />
                Con về rợp bướm vàng bay <br />
                Quê hương là con diều biếc <br />
                Tuổi thơ con thả trên đồng <br />
                Quê hương là con đò nhỏ <br />
                Êm đềm khua nước ven sông <br />

        <?php
			}	
			?>
    
    
    </body> 
</html>
