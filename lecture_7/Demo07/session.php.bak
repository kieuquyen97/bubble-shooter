<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/

session_start();

require('common.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minh họa session</title>
</head>

<body>
<?php

if(isLogined())
{
?>
	Bạn đã đăng nhập với username = <?php echo($_SESSION['username'])?>. Nhấn vào <a href="logout.php?url=1">đây</a> để log out và trở về trang login.php
<?php
}
else
{
?>
	Bạn chưa đăng nhập. Nhấn vào <a href="login.php">đây</a> để đăng nhập.
<?php
}
?>
</body>
</html>