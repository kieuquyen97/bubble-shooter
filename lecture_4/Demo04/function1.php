<?php
	/*
	Minh họa hàm và tham số của hàm trong PHP.
	Gọi hàm PHP từ file khác (lib.php)
	*/
	
	// Cong 2 so
	function cong($x, $y)
	{
		$x = $x + $y;
		return ($x);
	}
	
	function cong1(&$x, $y)
	{
		$x = $x + $y;
		return ($x);
	}
	
	function cong2()
	{
		global $a, $b;	
		$a += $b;	
		return ($a);
	}
	
	function cong3($x, $y)
	{
		static $kq = 0;//$x; // lưu ý biến static không gán bằng 1 biến thường được
		$kq += $y;
		return ($kq);
	}
?>

<html> 

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Test php</title>
    </head>
    
    <body>
    
	<?php /*?>	<?php
			$a = 3;
			$b = '1';
        ?>
        
        Trước khi gọi hàm cong $a = <? echo($a); ?> , $b = <? echo($b); ?> <br>
        $a + $b = <? echo(cong($a, $b)); ?> <br> <!-- Hàm cong truyền tham trị -->
        Sau khi gọi hàm $a = <? echo($a); ?>
        
        <hr>
        
        Trước khi gọi hàm cong1 $a = <? echo($a); ?> , $b = <? echo($b); ?>  <br>
        $a + $b = <? echo(cong1($a, $b)); ?> <br> <!-- Hàm cong1 truyền tham biến -->
        Sau khi gọi hàm $a = <? echo($a); ?>
        
        <hr>
        
        Trước khi gọi hàm cong2 $a = <? echo($a); ?> , $b = <? echo($b); ?>  <br>
        $a + $b = <? echo(cong2($a, $b)); ?> <br> <!-- Hàm cong2 sử dụng từ khóa global -->
        Sau khi gọi hàm $a = <? echo($a); ?>
        
        <hr>
        
        Trước khi gọi hàm cong3 $a = <? echo($a); ?> , $b = <? echo($b); ?>  <br>
        Gọi hàm cong3 lần 1: $a + $b = <? echo(cong3($a, $b)); ?> <br> <!-- Hàm cong2 sử dụng từ khóa static -->
        Gọi hàm cong3 lần 2: $a + $b = <? echo(cong3($a, $b)); ?> <br>
        Gọi hàm cong3 lần 3: $a + $b = <? echo(cong3($a, $b)); ?> <br>
        <?php */?>
        <hr>
        <?php
			$a = array('dct107x', 'dct108x', 'cmt107x');
			echo('Trước khi gọi hàm: ');
			print_r($a);
			
			resetArray($a); // chưa có khai báo mà gọi hàm --> báo lỗi không cho chạy
			//include('lib.php'); // sử dụng URL tương đối
			
			// minh họa include vs require --> xóa dòng include ở trên
			//include('lib.php'); // không tìm thấy file lib.php, xuất ra dòng warning và chạy tiếp các dòng dưới
			//require('lib.php'); // không tìm thấy file lib.php, không chạy tiếp bất kì dòng nào
			
			//resetArray($a);
			echo('<br> Sau khi gọi hàm: ');
			print_r($a);
			
        ?>
        
        <hr>
        Ending...
    
    </body> 
</html>
