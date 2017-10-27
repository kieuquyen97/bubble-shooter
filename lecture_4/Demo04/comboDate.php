
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Combo Date</title>
    </head>
    
    <body>
        <p>ComboDate from Javascript!</p>
        <select name="cboNgay0" id="cboNgay0">
        	<option value='-1'>Hello from Javascript !</option>
            <script type="text/javascript">
                for (i = 1; i <= 31; i++)
                {
                    var s = '<option value="' + i + '">' + i + '</option>';
                    document.write(s);
                }
            </script>
        </select>
        <p>ComboDate from PHP!</p>
        <select name="cboNgay1" id="cboNgay1">
        	<option value='-1'>Hello from PHP !</option>
             <?php
                for ($i=1; $i<=31; $i++)
                {
                    $s='<option value ="' . $i . '">' . $i . '</option>';
                    echo($s);
                }
            ?>
         </select>
    </body>
</html>