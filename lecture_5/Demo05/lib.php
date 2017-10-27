<?php
function resetArray(&$x)
{
	if (is_array($x))
	{
		//print_r($x);
		
		$i = 0;
		for($i = 0; $i < count($x) ; $i++)
		{
			$x[$i] = 0;//NULL;
		}
		
		//print_r($x);
	}
}

function tinhTuoi($namSinh)
{
	//echo($namSinh);
	//echo(is_numeric($namSinh));
	
	if(is_numeric($namSinh))//nếu năm sinh là số mới làm tiếp
	{
		//echo(gettype($namSinh));
		$namSinh = (int) $namSinh; // ép kiểu thành integer
		//echo(gettype($namSinh));
		
		$namHienTai = date('Y'); // hàm date() của PHP rất lợi hại --> http://vn2.php.net/date
		//echo(gettype($namHienTai));
		$namHienTai = (int) $namHienTai;
		//echo(gettype($namHienTai));
		
		if ($namHienTai > $namSinh)
			return ($namHienTai - $namSinh);
	}
	
	return NULL; // trả về rỗng
}
?>

