<html><title>Combobox</title>
<body>
	<form method="POST" action="combobox.php">
		<select name="Lunch">
			<option value="Pork"> Thit heo </option>
			<option value="Chicken"> Thit ga </option>
			<option> Rau cai </option>
		</select>
		<input type="submit" name="submit" value= "Chon"/>
	</form>
	Mon duoc chon:
	<?php
		if (isset($_POST['Lunch']))
		{
			echo "Da chon: " . $_POST['Lunch'] . "<br>";
		}
	?>
</body>
</html>