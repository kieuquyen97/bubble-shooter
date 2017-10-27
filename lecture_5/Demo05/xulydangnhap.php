<?php
	/*
	Server-side PHP xử lý dữ liệu nhận từ client:
	+ dangnhap.php
	+ lib.js
	+ xulydangnhap.php
	+ lib.php
	//Example from C.Thanh
	*/
	
	// Khai báo file lib.php : sử dụng hàm resetArray(&$array) và hàm tinhTuoi($namSinh)
	require('lib.php')
?>

<html> 

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>:| From Mr. Cao Thanh </title>
    </head>
    
    <body>
    
        Web page minh họa xử lý dữ liệu nhập. <br>
        
        <?php
			// lấy dữ liệu client gửi
			$username = $_GET['txtName'];
			$pass = $_GET['txtPass'];
			$isMale = $_GET['sex'] == 'nam' ? true : false; // toán tử 3 ngôi tương tự C
			$nameSinh = $_GET['cboNam'] + 0; // đổi thành kiểu số, dùng tính chất đặc biệt của toán tử + trong PHP
			
			// xử lý dữ liệu gửi
			$s = 'Chào ';
			if($isMale)
				$s .= 'anh '; // ghép dồn chuỗi :)
			else
				$s .= 'chị ';
			$s .= $username . '. ';
			
			$s .= strtoupper($username) . ' ' . tinhTuoi($nameSinh) . ' tuổi và có mật khẩu là:' . crypt($pass);
			// ghép chuỗi dài và mã hóa password
			
			print($s);
        ?>
    
    </body> 
</html>
