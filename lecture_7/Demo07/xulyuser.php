<?php
session_start();

$loai = $_REQUEST['loai'];
if(isset($loai))
{
	switch($loai)
	{
		case 0: // insert
			if(insert())
				header('Location:quanlyuser.php?duoc=1');
			else
				header('Location:themuser.php?loi=1');
			break;
			
		case 1: // UPDATE
			if(update())
				header('Location:quanlyuser.php?duoc=1');
			else
				header('Location:suauser.php?loi=1');
			break;
			
		case 2: // DELETE
			if(delete())
				header('Location:quanlyuser.php?duoc=1');
			else
				header('Location:quanlyuser.php');
			break;
					
		default: // do nothing
			header('Location:quanlyuser.php');			
			break;
	}
}

// trả về true || false
function insert()
{
	$username = $_REQUEST['txtUser'];
	$password = $_REQUEST['txtPass'];
	$avat = $_REQUEST['txtAva'];
	
	// giả sử dữ liệu đúng
	
	require('opendb.php');
	
	$sQuery = sprintf("insert into users (username, password, avatar) values('%s', '%s', '%s')", mysql_real_escape_string($username), mysql_real_escape_string($password), mysql_real_escape_string($avat));
	//echo($sQuery);
	
	$result = mysql_query($sQuery);
			
	mysql_close($conn);
		
	// lỗi	
	return $result;
}


// trả về true || false
function delete()
{
	$username = $_REQUEST['username'];	
	
	// giả sử dữ liệu đúng
	
	require('opendb.php');
	
	$sQuery = sprintf("delete from users where username='%s'", mysql_real_escape_string($username));
	//echo($sQuery);
	
	$result = mysql_query($sQuery);
			
	mysql_close($conn);
		
	// lỗi	
	return $result;
}

function update()
{
	$username = $_REQUEST['txtUser'];
	$password = $_REQUEST['txtPass'];
	$avat = $_REQUEST['txtAva'];
	
	// giả sử dữ liệu đúng
	
	require('opendb.php');
	
	$sQuery = sprintf("UPDATE users SET password='%s', avatar='%s' where username='%s'", mysql_real_escape_string($password), mysql_real_escape_string($avat), mysql_real_escape_string($username));
	//echo($sQuery);
	
	$result = mysql_query($sQuery);
			
	mysql_close($conn);
		
	// lỗi	
	return $result;
}


?>