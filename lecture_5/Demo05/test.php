<html> 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test php</title>
</head>

<body>

<?php
/*print("I said: 'Hello' # ");
print('I said: "Hello" # ' . '<br>');
print("I said: \"Hello' # ");
print('I said: "Hello\' # ');*/
	
/*$num = 3.4; 
echo('Type of ' . $num . ' is: ' . gettype($num) . '<br>');
$num = 3; 
echo('Type of ' . $num . ' is: ' . gettype($num) . '<br>');
$str = "Thanh"; 
echo($str . ' is string: ' . is_string(str) . '<br>');
$bool = true; 
echo($bool . ' is float: ' . is_float($bool) . '<br>');*/

$x = 5; $y = x . " lửa"; // y = “5 lửa”
echo(gettype($y));
echo('<hr>');
$z = 2 . 3; // z = “23”
echo($z . ' is ' . gettype($z));

echo('<hr>');

$x = 1 + '1';
echo($x . ' is ' . gettype($x) . '<br>');
$x = 1 + '1.1';
echo($x . ' is ' . gettype($x) . '<br>');
$x = false + 1 + '2.2';
echo($x . ' is ' . gettype($x) . '<br>');
$x = true + '0.2';
echo($x . ' is ' . gettype($x));


/*$obj = array(); 
$obj[0] = 1;
$obj[1] = '1';
$obj[2] = false;
foreach($obj as $tmp)
	echo($obj[0] . '<br>');
echo(count($obj));*/

?>

</body> 
</html>
