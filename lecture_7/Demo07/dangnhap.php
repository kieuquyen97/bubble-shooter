<?php
require('common.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
</head>

<body>
<?php
if (isLogined())
{
?>

Bạn đã đăng nhập với username = <?php echo $_SESSION['username'] ?>;
Nhấn vào <a href="xulydangnhap.php?loai=1">đây</a> để logout.

<?php
}
else
{
?>

<?php
if (isset($_REQUEST['loi']))
{
echo 'Username hoặc password sai. Vui lòng nhập lại.';
}
?>

<form action="xulydangnhap.php" method="get">
<table width="60%" border="0">
  <tr>
    <td width="11%">Username</td>
    <td width="89%"><input type="text" name="txtUser" id="textfield" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="txtPass" id="textfield" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="OK" /></td>
  </tr>
</table>
<input name="loai" type="hidden" value="0" />
</form>
<?php
}
?>

</body>
</html>
