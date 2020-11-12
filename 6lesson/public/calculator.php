<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$arg1 = $_POST['a'];
		$arg2 = $_POST['b'];
		if(isset($_POST['courses']))	{
    	$courses = $_POST['courses'];
    	foreach($courses as $item) {
    		if ($item == "+") {
    			$result = $arg1 + $arg2;
    			echo $result;
    		} elseif ($item == "-") {
    				$result = $arg1 - $arg2;
    				echo $result;
    		} elseif ($item == "*") {
    				$result = $arg1 * $arg2;
    				echo $result;
    		}	else {
    				$result = $arg1 / $arg2;
    				echo $result;
    		}
    	};
		};
	?>
	<form action="" method="post">
		<input type="text" name="a">
		<select name="courses[]" size="1">
    	<option value="+">+</option>
    	<option value="-">-</option>
    	<option value="*">*</option>
    	<option value="/">/</option>
		</select>
		<input type="text" name="b">
		<input type="submit">
	</form>
</body>
</html>