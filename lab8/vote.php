<!DOCTYPE html>
<html>
	<head>
		<title>Vote</title>
		<style>
			h3 {
				color: green;
			}
		</style>
	</head>
	<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$age = $_POST["age"];
			
			if($age >= 18)
				echo "<h3> Eligible to Vote</h3>";
			else
				echo "<h3> Not Eligible to Vote</h3>";
		}
	?>

	<h2>Vote Eligibility Generator</h2>
	<form action="./vote.php" method="POST">
		<label>Enter your age</label>
		<input type="number" placeholder="Enter your age" name="age" />
		<button type="submit">Validate Age</button>
	</form>
	</body>
</html>