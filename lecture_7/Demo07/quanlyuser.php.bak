<?php
require('common.php');

require('opendb.php');

$sQuery = 'select * from users';
$result = mysql_query($sQuery);

mysql_close($conn);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý user</title>

<script>
function ktxoa(username)
{
	var yes = confirm('Xóa thiệt hông?');
	if(yes)
	{
		location = 'xulyuser.php?loai=2&username=' + username;
	}
}
</script>

</head>

<body>
<table width="80%" border="1">
  <caption>
    Danh sách user
  </caption>
  <tr>
    <th scope="col">username</th>
    <th scope="col">password</th>
    <th scope="col">Họ &amp; tên</th>
    <?php
	if (isLogined())
	{
		echo('<th scope="col">Quản lý</th>');
	}
	?>
    
  </tr>
  
  <?php
  while($row = mysql_fetch_array($result))
  {
  ?>  
  <tr>
    <td><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td>
    <td><img width="40" src='<?php echo $row[2] ?>' /></td>
	<?php
	if (isLogined())
	{
		echo('<td><a href="suauser.php?username=' . $row[0] . '">Edit</a> <a href="" onclick="ktxoa(\''. $row[0] . '\');">Delete</a></td>');
	}
	?>    
  </tr>
  
  <?php
  }
  ?>
  
</table>
<a href='themuser.php'> Add user </a>
</body>
</html>
