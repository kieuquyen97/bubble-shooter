<html><title>Listbox</title>  
<body>
	<form method="POST" action="Listbox.php">
		<select name="lunch[]" multiple>
			<option value="pork">Thit heo </option>
			<option value="chicken">Thit ga </option>
			<option> Rau qua </option>
		</select>
		<input type="submit" name="submit" value= "Chon" />
	</form>
	Mon duoc chon : <br/>
	<?php
		foreach ($_POST['lunch'] as $choice)
		{
			echo "Da chon: " . $choice . "<br>"; 
		}
	?>
</body>
</html>