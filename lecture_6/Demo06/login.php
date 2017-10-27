<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/

session_start();



// nếu nhận được thông tin login
if(isset($_REQUEST['btnSubmit']))
{	
	// giả sử là đăng nhập thành công
	// lưu username vào SESSION['username']
	$_SESSION['username'] = $_REQUEST['txtName'];
	//echo($_SESSION['username']);
}

require('common.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User login</title>
</head>

<body>

<?php
if(isLogined())
{
?>
	Bạn đã đăng nhập với username = <?php echo($_SESSION['username'])?>. <br />
    Nhấn vào <a href="session.php">đây</a> để đến trang session.php <br />
    Nhấn vào <a href="logout.php?url=2">đây</a> để log out và đến trang session.php
<?php
}
else
{
?>

<form action="login.php" method="post" name="frm1">

<table width="40%" border="0">
  <tr>
    <th width="17%" scope="col"><div align="left">Username:</div></th>
    <th width="83%" scope="col"><div align="left">
      <input name="txtName" type="text" value="<?php echo($_COOKIE['ckName']) ?>" />
    </div></th>
  </tr>
  <tr>
    <th scope="row"><div align="left">Password:</div></th>
    <td><div align="left">
      <input name="txtPass" type="password" value="<?php echo($_COOKIE['ckPass']) ?>" />
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div align="left"></div></th>
    <td><div align="left">
      <input name="btnSubmit" type="submit" value="OK" />
    </div></td>
  </tr>
</table>

</form>

<?php
}
?>


</body>
</html>
