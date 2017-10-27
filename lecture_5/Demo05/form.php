<?php
	/*
	Minh họa xử lý dữ liệu nhận từ client
	Phương thức POST. 
	Kết hợp nhiều kĩ thuật trong 1 file: Form nhập (phương thức POST) + kiểm tra dữ liệu nhập bằng JavaScript + xử lý & hiển thị dữ liệu nhận
	//Example from Mr. cao Thanh
	*/
	
	$hasSubmited = $_POST['btnSubmit'];
	if (isset($hasSubmited))
		$hasSubmited = true;
	else
		$hasSubmited = false;
		
	// cách code khác có tác dụng tương tự
	/*if (isset($_POST['btnSubmit']))
		$hasSubmited = true;
	else
		$hasSubmited = false;*/
		
	// tùy theo đã gửi dữ liệu hay chưa mà php gửi HTML khác nhau cho client

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HTML form demo</title>
        
        <?php
			if(!$hasSubmited)
			{
        ?>
        
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
        
        <?php
        	}
        ?>
        
    
    </head>
    
    <body>
    
    <?php
    if($hasSubmited)
    {
        require('lib.php');
        
        // lấy dữ liệu client gửi
        $username = $_POST['txtName'];
        $pass = $_POST['txtPass'];
        $isMale = $_POST['sex'] == 'nam' ? true : false; // toán tử 3 ngôi tương tự C
        $nameSinh = $_POST['cboNam'] + 0; // đổi thành kiểu số, dùng tính chất đặc biệt của toán tử + trong PHP
        
        // xử lý dữ liệu gửi
        $s = 'Chào ';
        if($isMale)
            $s .= 'anh '; // ghép dồn chuỗi :)
        else
            $s .= 'chị ';
        $s .= $username . '. ';
        
        $s .= strtoupper($username) . ' ' . tinhTuoi($nameSinh) . ' tuổi và có mật khẩu là:' . crypt($pass);
        // ghép chuỗi dài và mã hóa password
        
        print($s);
    }
    else
    {
		?>
		
		<form action="" method="post" name="frm1" onsubmit="return kiemTraDuLieuNhap();">
            Username: <input name="txtName" type="text" />
            <br />
            Password: <input name="txtPass" type="text" />
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
		
		<?php
		}
		?>
		
    </body>
</html>
