<html><body>
	<form action="Names.php" name="myform" method="GET">
		First Name: <input type="text" name="Names[ ]" size=20>
		<br>
		Last Name: <input type="text" name="Names[ ]" size=20>
		<br>
		<input type="submit" value="submit">
	</form>
	<?php
		if (isset($_GET['Names']))
		{
			echo "Hello " . $_GET['Names'][0] . " " . $_GET['Names'][1];
		}
	?>
</body></html>