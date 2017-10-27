<?php
require('common.php');

require('opendb.php');

//$sQuery = "select * from user where username='" . $_REQUEST['username'] . "'";
$sQuery = sprintf("select * from users where username='%s'", $_REQUEST['username']);

$result = mysql_query($sQuery);

$row = mysql_fetch_array($result);

mysql_close($conn);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm user</title>
</head>

<body>
<?php
if (isset($_REQUEST['loi']))
{
echo 'Không thể update được vì lý do gì đó. Vui lòng nhập lại.';
}
?>

<form action="xulyuser.php" method="get">
<table width="60%" border="0">
  <tr>
    <td width="11%">Username</td>
    <td width="89%"><input type="text" name="txtUser" id="textfield" readonly="readonly" value="<?php echo $row[0]?>"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="txtPass" id="textfield" value="<?php echo $row[1]?>"/></td>
  </tr>
  <tr>
    <td width="11%">Avatar</td>
    <td width="89%"><input type="text" name="txtAva" id="textfield"value="<?php echo $row[2]?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="OK" /></td>
  </tr>
</table>
<input name="loai" type="hidden" value="1" />
<!-- loai == 1 : update user -->
</form>

</body>
</html>
