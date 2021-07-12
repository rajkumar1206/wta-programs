<!DOCTYPE html>
<html>
	<head>
		<title>Post Data</title>
		<style>
			h3 {
				color: green;
			}
		</style>
	</head>
	<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$post = $_POST["post"];
			
			if($post)
				echo "<h3> Your post data is $post</h3>";
			else
				echo "<h3>No post data received</h3>";
		}
	?>

	<h2>Post your data</h2>
	<form action="./post-data.php" method="POST">
		<label>Enter your post</label>
		<input type="text" placeholder="Enter your post data" name="post" />
		<button type="submit">Post Data</button>
	</form>
	</body>
</html>