<?php
/*
Minh họa code PHP và cách viết code...
*/


function tinhTuoi($namSinh)
{
	//echo($namSinh);
	//echo(is_numeric($namSinh));
	
	if(is_numeric($namSinh))//nếu năm sinh là số mới làm tiếp
	{
		echo(gettype($namSinh));
		$namSinh = (int) $namSinh; // ép kiểu thành integer
		echo(gettype($namSinh));
		
		$namHienTai = date('Y'); // hàm date() của PHP rất lợi hại --> http://vn2.php.net/date
		echo(gettype($namHienTai));
		$namHienTai = (int) $namHienTai;
		echo(gettype($namHienTai));
		
		if ($namHienTai > $namSinh)
			return ($namHienTai - $namSinh);
	}
	
	return NULL; // trả về rỗng
}

function tinhToan()
{
	print('PI = ' . pi() . '<br>');
	print('random(1, 10) = ' . rand(1, 10) . '<br>');
	print('Căn bậc 3 của 27 = ' . pow(27, (1/3)) . '<br>');		
}

// MINH HỌA CÁCH VIẾT ...

/*
Đổi 1 chuỗi thành mảng số, căn cứ vào biến $delimiter để tách chuỗi
Trả về mảng số
*/
function stringToNumericArray($str, $delimiter)
{
	if (is_string($str) && is_string($delimiter))
	{				
		// B1: tách chuỗi thành mảng các chuỗi con theo $delimiter
		$strArr = stringToStringArray($str, $delimiter);
		
		//print_r($strArr);
		
		// B2: đổi các chuỗi con trong mảng thành kiểu số và đưa vào mảng kết quả
		$kq = stringArrayToNumericArray($strArr);
		
		return $kq;
	}
	return NULL;
}

function stringToStringArray($str, $delimiter)
{		
	// cách 1
	$kq = array();	
	$i = 0;
	
	do
	{
		$pos = stripos($str, $delimiter);		
		if ($pos != false)
		{
			$sTmp = substr($str, 0, $pos);
			//print_r($pos . '+' . $sTmp . '<br>');
			if (strlen($sTmp) > 0) // chỉ thêm khi phần tử đó có giá trị
				$kq[$i++] = $sTmp;
			//print_r($kq);
			$str = substr($str, $pos + strlen($delimiter)); // vòng lặp bỏ phần tử đã xét
											// + strlen($delimiter) để bỏ luôn chuỗi ngăn cách		
			//print_r($kq);
			//print_r($pos . '+' . $sTmp . '-' . $str . '<br>');
		}				
	}
	while($pos != false);
	
	// ra khỏi vòng lặp, $str chứa phần còn lại của chuỗi sau khi bỏ hết $delimiter
	//print('a:' . strlen($str));
	if (strlen($str) > 0)
		$kq[$i] = $str; // không cần ++
			
	//print_r($kq);
	//print(count($kq));
	
	return $kq;
	
}

function stringArrayToNumericArray($strArr)
{
	$kq = array();	
	
	foreach($strArr	 as $str)
	{
		if (is_numeric($str))
		{
			array_push($kq, $str + 0); // không dùng ép kiểu được, vì không chắc là kiểu float hay int
										// lợi dụng tính chất đặc biệt của toán tử + trong PHP
		}
	}
	
	return $kq;
}

?>

<html> 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test php</title>
</head>

<body>

Tuổi = <? echo(tinhTuoi(1979)); ?> <br>

<hr>
<? tinhToan(); ?>

<hr>
<? 
	$s = '-4.3, 1, o,0,';
	echo($s . '<br>');
	$a = stringToNumericArray($s, ','); 
	print_r($a);
?>

</body> 
</html>
