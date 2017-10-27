<?php
/*
Minh họa PHP cookie:
+ cookie.php
+ xulycookie.php
*/

setcookie('ckName', $_GET['txtName']);
setcookie('ckPass', $_GET['txtPass']);

$xoacookie = $_REQUEST['xoacookie'];
//print($xoacookie);
if(isset($xoacookie) && $xoacookie == 1)
{
	setcookie('ckName', '', time()-3600);
	setcookie('ckPass', '', time()-3600);
	
	// php redirect
	header('Location:cookie.php'); // phải đặt trước thẻ <html>
}
?>

<html> 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:|</title>
</head>

<body>

Cooki đã được lưu. <br>
Nhấn vào <a href="cookie.php"> đây </a> để trở về file cookie.php. <br>
Nhấn vào <a href="xulycookie.php?xoacookie=1"> đây </a> để xóa cookie và trở về file cookie.php.

</body> 
</html>
