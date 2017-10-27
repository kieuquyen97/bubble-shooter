<?php
/*
Server-side PHP xử lý dữ liệu nhận từ client:
+ dangnhap.php
+ lib.js
+ xulydangnhap.php
+ lib.php
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML form demo</title>

<script src="lib.js">
</script>

<script>
function kiemTraDuLieuNhap()
{
	var s = trimString(document.frm1.txtName.value);
	//alert(s.length);
	if (s.length <= 0)
	{
		alert('Vui lòng username!');		
		return false;
	}
	
	s = trimString(document.frm1.txtPass.value);	
	if (s.length <= 0)
	{
		alert('Vui lòng password!');		
		return false;
	}
	
	var rdSexs = document.frm1.sex;
	//alert(rdSexs.length); // rdSexs là 1 mảng chứa 2 đối tượng tương ứng với 2 radio có tên sex
	// vì ở đây ta biết chắc chỉ có 2 radio name = 'sex' nên ta hard-code
	if (!rdSexs[0].checked && !rdSexs[1].checked)
	{
		alert('Vui lòng chọn giới tính!');		
		return false;
	}
	
	cboNamSinh = document.frm1.cboNam;
	if (cboNamSinh.value == -1)
	{
		alert('Vui lòng nhập năm sinh!');
		return false;	
	}
	
	return true;
}
</script>

</head>

<body>
<form action="xulydangnhap.php" method="get" name="frm1" onsubmit="return kiemTraDuLieuNhap();">
Username:
<input name="txtName" type="text" />
<br />
Password:
<input name="txtPass" type="text" />
<br />

<input name="sex" type="radio" value="nam" /> Nam 
<input name="sex" type="radio" value="nu" /> Nữ <br />

<select name="cboNam">
<option value='-1'>Năm sinh</option>
<script>
for(var i = 1970; i < 2009; i++)
{
	var s = "<option value='" + i + "'>" + i + "</option>";
	document.write(s);
}
</script>
</select>

<br />
<input name="btnSubmit" type="submit" value="OK" />



</form>
</body>
</html>
