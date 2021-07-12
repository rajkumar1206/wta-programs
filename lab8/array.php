<!DOCTYPE html>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
	<?php
		$games = array("Shadow of Tonb Raider", "Valorant", "Far Cry"); 
		$persons = array("Rajkumar"=>"21", "Gal Gadot"=>"37", "Sherlock Holmes"=>"43");
		
		echo "<h3>Enumerated Array Contents</h3>";
		foreach($games as $game)
			echo "$game<br>";
		
		echo "<h3>Associative Array Contents</h3>";
		foreach($persons as $name => $age)
			echo "$name age is $age<br>";   
	?>
	</body>
</html>