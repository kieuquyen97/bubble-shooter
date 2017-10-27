<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/

session_start();

// log out ~ SESSION['username'] == NULL
$_SESSION['username'] = NULL;

// redirect
switch($_REQUEST['url'])
{
case 1:
	header('Location:login.php');
	break;
default 2:
	header('Location:session.php');
	break;
}
?>

