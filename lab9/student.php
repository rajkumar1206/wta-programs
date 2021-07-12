<!DOCTYPE html>
<html>
	<head>
		<title>Student Details</title>
		<style>
			h3 {
				color: green;
			}
		</style>
	</head>
	<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "rajkumar";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $db);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

			$number = $_POST["id"];
					
			$sql = "SELECT * FROM student WHERE usn='$number'";
      $result = $conn->query($sql);

      if ($result->num_rows) {
        $row = $result->fetch_assoc();
        echo "<h3>USN: " . $row["usn"]. "<br>Branch: " . $row["branch"]. "<br>Name: " . $row["name"]. "<br></h3>";
      } else {
        echo "no results";
      }
      $conn->close();
		}
	?>

<h2>Student Details</h2>
	<form action="./student.php" method="POST">
		<label>Enter Student Details</label>
		<input type="text" placeholder="Enter your usn" name="id" />
		<button type="submit">Check Student Details</button>
	</form>
	</body>
</html>