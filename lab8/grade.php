<!DOCTYPE html>
<html>
	<head>
		<title>Grade</title>
		<style>
			h3 {
				color: green;
			}
		</style>
	</head>
	<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$marks = $_POST["marks"];
			$grade = "";
			if($marks >=90)
				$grade = "S";
			elseif($marks >=75)
				$grade = "A";
			elseif($marks >=60)
				$grade = "B";
			elseif($marks >=50)
				$grade = "C";
			elseif($marks >= 45)
				$grade = "D";
			else
				$grade = "F";
			
			echo "<h3> Grade is $grade</h3>";
		}
	?>

	<h2>Grade Generator</h2>
	<form action="./grade.php" method="POST">
		<label>Enter the Marks Obtained</label>
		<input type="number" placeholder="Enter your marks" name="marks" />
		<button type="submit">Generate Grade</button>
	</form>
	</body>
</html>