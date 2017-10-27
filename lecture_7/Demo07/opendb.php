<?php 
	// db parameters
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'dct108x';
	
	// connect
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Không thể kết nối CSDL');
	mysql_set_charset('utf8', $conn);  // for UTF-8
	mysql_select_db($dbname);
?>
