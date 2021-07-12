<!DOCTYPE html>
<html>
	<head>
		<title>Number</title>
		<style>
			h3 {
				color: green;
			}
		</style>
	</head>
	<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
			$number = $_POST["number"];
					
			if($number == 0)
				echo "<h3>Number is Zero</h3>";
			elseif($number > 0)
				echo "<h3>Number is Positive</h3>";
			else
				echo "<h3>Number is Negative</h3>";
		}
	?>

<h2>Number tester</h2>
	<form action="./number.php" method="POST">
		<label>Enter a Integer Number</label>
		<input type="number" placeholder="Enter your choice" name="number" />
		<button type="submit">Check Number</button>
	</form>
	</body>
</html>