<?php
session_start();

$loai = $_REQUEST['loai'];
if(isset($loai))
{
	switch($loai)
	{
		case 0: // login
			if(login())
				header('Location:dangnhap.php?duoc=1');
			else
				header('Location:dangnhap.php?loi=1');
			break;
			
		case 1: // logout
			$_SESSION['username'] = NULL;
			header('Location:dangnhap.php');
			break;
			
		default: // do nothing
			header('Location:dangnhap.php');			
			break;
	}
}

// trả về true || false
function login()
{
	$username = $_REQUEST['txtUser'];
	$password = $_REQUEST['txtPass'];
	
	// giả sử dữ liệu đúng
	
	$con = mysql_connect("localhost","myUser","abc123");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	//print('connected');
	
	mysql_set_charset('utf8', $con);  // for UTF-8
	mysql_select_db("dct108x", $con);
	
	//$sQuery = "select * from user where username = '" . $username . "'";
	
	//$sQuery = sprintf("select * from user where username = '%s'", $username);
	
	$sQuery = sprintf("select * from users where username = '%s'", mysql_real_escape_string($username));
	
	$result = mysql_query($sQuery);
	
	if(mysql_num_rows($result) == 1)
	{
		$row = mysql_fetch_array($result);
		
		//$row[0] ~ $row['username']
		if ($row['password' == $password])
		{
			// login đúng
			$_SESSION['username'] = $username;
			//echo('Logined');
			
			mysql_close($con);
			
			return true;
		}
	}
	
	mysql_close($con);
		
	// lỗi
	//header('Location:dangnhap.php?loi=1');
	return false;
}

?>