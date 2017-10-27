<?php
/*
Minh họa PHP cookie:
+ cookie.php
+ xulycookie.php
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML form demo</title>
</head>

<body>

<form action="xulycookie.php" method="get" name="frm1">
Username:
<input name="txtName" type="text" value="<?php echo($_COOKIE['ckName']) ?>" />
<br />
Password:
<input name="txtPass" type="password" value="<?php echo($_COOKIE['ckPass']) ?>" />
<br />
<input name="btnSubmit" type="submit" value="OK" />

</form>
</body>
</html>
